import axios from 'axios';

let actions = {
    createSnippet({ commit }, snippet) {
        axios.post('/api/snippets', snippet)
            .then(res => {
                commit('CREATE_SNIPPET', res.data)
            }).catch(err => {
                console.log(err)
            })

    },
    fetchSnippets({ commit }) {
        axios.get('/api/snippets')
            .then(res => {
                commit('FETCH_SNIPPETS', res.data)
            }).catch(err => {
                console.log(err)
            })
    },
    fetchSnippetsByUser({ commit }, user) {
        axios.get(`api/users/${user.id}/snippets`)
            .then(res => {
                commit('FETCH_SNIPPETS_BY_USER', res.data)
            })
            .catch(err => {
                console.log(err);
            });
    },
    deleteSnippet({ commit }, snippet) {
        axios.delete(`/api/snippets/${snippet.id}`)
            .then(res => {
                if (res.data === 'ok')
                    commit('DELETE_SNIPPET', snippet)
            }).catch(err => {
                console.log(err)
            })
    }
}

export default actions