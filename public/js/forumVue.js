console.log('VueRunningHere');

Vue.createApp({
  data () {
    return {
      title: 'Bienvenue sur le Forum',
      menuShow: true,
      
    }
  },
  methods: {
    join (id) {
      console.log('join'+id);
      console.log(this.menuShow);
      this.menuShow=false;
    }
  }
}).mount('#app')