var dashboardApp = new Vue({
  el: '#dashboard',
  data: {
  "name" : ' ',
  "short_description": ' ',
  "start_date" : ' ',
  "target_date" : ' ',
  "budget" : ' ',
  "spent" : ' ',
  "projected_spend": ' ',
  "weekly_effort_target": ' ',
  tasks:
    [
  {
    "id": ' ',
    "title": ' ',
    "type" : ' ',
    "size" : ' ',
    "team" : ' ',
    "status": ' ',
    "start_date": ' ',
    "close_date": ' ',
    "hours_worked": ' ',
    "perc_complete": ' ',
    "current_sprint" : ' ',
  },
]
},
  computed:{
    days_left: function() {
      return moment(this.target_date).diff(moment(), 'days');
    }
  },
  methods:{
    pretty_date: function(d) {
      return moment(d).format('l');    // 9/5/2018
    },
    pretty_currency: function (val) {
      if (val<1e3) {
        return '$' + val;
      }
      if (val < 1e6){
        return '$' + (val/1e3).toFixed(1) + ' K';
      }

      return '$' + (val/1e6).toFixed(1) + ' M';
    },
    completeClass: function(task) {
      if(task.perc_complete == 100) {
        return 'alert-success';
      }
      if(task.current_sprint && task.hours_worked == 0) {
        return 'alert-running';
      }
    },
    fetchTasks(){
      fetch('https://raw.githubusercontent.com/tag/iu-msis/dev/public/p1-tasks.json')
      .then( response => response.json() )
      .then( json => {this.tasks = json; } )
      .catch( function(err) {
        console.log('FETCH ERROR: ');
        console.log(err);
      });
    },
  },
  created: function() {
    this.fetchTasks();
  }
});
