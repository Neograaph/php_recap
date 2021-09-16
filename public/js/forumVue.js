console.log('VueRunningHere');

Vue.createApp({
  data () {
    return {
      title: 'Bienvenue sur le Forum',
      menuShow: true,
      
    }
  },
  methods: {
    join (chan,id) {
      console.log('join '+chan+' '+id);
      console.log(this.menuShow);
      this.menuShow=false;
    },
    backToMenu () {
      this.menuShow=true;
    },
  }
}).mount('#app')