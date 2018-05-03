var vm = new Vue({
    el:"#h1",
    
    data: {
        tempsEcoule: 0
    },
    
    methods: {
        doAction: setInterval(function(){
            vm.tempsEcoule;
            vm.tempsEcoule++;
        },1000)    
    }
});