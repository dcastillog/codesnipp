let user = document.head.querySelector('meta[name="user"]');

module.exports = {
    computed: {
        currentUser() {
            if (this.isAuthenticated) {
                return JSON.parse(user.content);
            }
            return {
                name: 'Usuario invitado'
            }
        },
        isAuthenticated() {
            return !!user.content; // Va devolver verdadero si existe un valor y falso sino
        },
        isGuest() {
            return !this.isAuthenticated;
        }
    },
    methods: {
        redirectIsGuest() {
            if (this.isGuest) {
                return window.location.href = '/login';
            }
        }
    }
};