Vue.createApp({
  data () {
    return {
      title: 'Bienvenue sur le Forum',
      menuShow: true,
      salonJoinId: null,
      formReplyShow: false,
      dateNow:null,
    }
  },
  methods: {
    join (chan,id) {
      this.menuShow=false;
      this.salonJoinId=id;
      console.log('salonJoinId '+this.salonJoinId);
      console.log('chan '+chan);
    },
    backToMenu () {
      this.menuShow=true;
      this.formReplyShow=false;
    },
    reply () {
      console.log('reply ');
      this.formReplyShow=true;
      location.hash = "#replyAnch"
    },
    cancelReply () {
      this.formReplyShow=false;
    },
    getDateNow () {
      this.dateNow=Date();
      console.log(this.dateNow);
      // return
    }

  }
}).mount('#app')