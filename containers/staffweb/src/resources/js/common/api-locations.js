export default class ApiLocation {
    static get SEARCH_LIST_EVALUATION() {
        return '/api/evaluation/search-list-evaluation';
    }

    static EVALUATION_DETAIL(id) {
        return '/evaluation-detail/' + id;
    }

    constructor() {}

    static path(uri) {
        window.location.href = uri
    }
}
