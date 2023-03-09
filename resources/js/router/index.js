import {createRouter, createWebHistory} from 'vue-router'


const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: () => import('../views/Home.vue')
        },
        {
            path: '/constaling',
            name: 'constaling',
            component: () => import('../views/Constaling.vue')
        },
        {
            path: '/fororganization',
            name: 'fororganization',
            component: () => import('../views/ForOrganization.vue')
        },
        {
            path: '/forclient',
            name: 'forclient',
            component: () => import('../views/ForClient.vue')
        },
        {
            path: '/ecosistem',
            name: 'ecosistem',
            component: () => import('../views/Ecosistem.vue')
        },
        {
            path: '/contact',
            name: 'contact',
            component: () => import('../views/Contact.vue')
        },
        {
            path: '/catalog',
            name: 'catalogs',
            component: () => import('../views/Catalogs.vue'),
            children: [
                {
                    path: 'medical',
                    name: 'med',
                    component: () => import('../views/Medical.vue')
                },
                {
                    path: 'spa',
                    name: 'spa',
                    component: () => import('../views/Spa.vue')
                },
                {
                    path: 'cafe',
                    name: 'cafe',
                    component: () => import('../views/Cafe.vue')
                },
                {
                    path: 'hotel',
                    name: 'hotel',
                    component: () => import('../views/Hostel.vue')
                },
                {
                    path: 'sanatorium',
                    name: 'sanatorium',
                    component: () => import('../views/Sanatoruim.vue')
                },
            ]
        },
        {
            path: '/medical/:id',
            name: 'med_card',
            component: () => import('../views/medicalCard.vue')
        },
        {
            path: '/spa/:id',
            name: 'spa_card',
            component: () => import('../views/spaCard.vue')
        },
        {
            path: '/cafe/:id',
            name: 'cafe_card',
            component: () => import('../views/cafeCard.vue')
        },
        {
            path: '/hotel/:id',
            name: 'hotel_card',
            component: () => import('../views/hostelCard.vue')
        },
        {
            path: '/sanatorium/:id',
            name: 'sanatorium_card',
            component: () => import('../views/sanatoriumCard.vue')
        },
        {
            path: '/blog/:id',
            name: 'single_blog',
            component: () => import('../views/blogItem.vue')
        },
    ],
    mode: 'history'
})

export default router
