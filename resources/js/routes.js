import Vue from 'Vue';
import VueRouter from 'vue-router';


Vue.use(VueRouter);


const router = new VueRouter(
    {
        mode: 'history',
        routes: [
            {
                path: '/',
                name: 'Home',
                component: Home,

            },
        ]
    });

router.beforeEach((to, from, next) => {

        next() //dont change


})


export default router;
