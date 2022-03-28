import { createWebHistory, createRouter } from 'vue-router'
import appIndex from '../pages/index.vue'
import candidate from '../components/Candidate/index.vue'
const routes = [
    {
        name: 'app-index',
        path: '/',
        component: appIndex
    },

    {
        name: 'candidate',
        path: '/createCandidate',
        component: candidate
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router
