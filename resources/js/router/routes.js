import Home from '../pages/Home';
import Gists from '../pages/Gists';
import Discover from '../pages/Discover';

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
    },
    {
        path: '/discover',
        name: 'discover',
        component: Discover
    }
];

export default routes;

