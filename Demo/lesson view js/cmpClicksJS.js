var vm = new Vue({
    el: '#footer',
    
    data: {
        nrClicks: 0
    },
    
    methods: {
        doAction: function(){
            vm.nrClicks++;
        }
    }
});

