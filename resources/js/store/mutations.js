let mutations = {
    CREATE_SNIPPET(state, snippet) {
        state.snippets.unshift(snippet);
    },
    FETCH_SNIPPETS(state, snippets) {
        return state.snippets = snippets
    },
    DELETE_SNIPPET(state, snippet) {
        let index = state.snippets.findIndex(item => item.id === snippet.id);
        state.posts.splice(index, 1);
    }
}

export default mutations;