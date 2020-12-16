import Home from '../pages/Home';
import Gists from '../pages/Gists';

const routes = [
    {
        path: '/',
        redirect: { name: 'home' }
    },
    {
        path: '/home',
        name: 'home',
        component: Home
    },
    {
        path: '/gists',
        name: 'gists',
        component: Gists
    }
];

export default routes;

