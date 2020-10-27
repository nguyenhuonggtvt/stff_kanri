require('../bootstrap');

const app = new Vue({
    el: '#wrapper',
    data: () => {
        return {
            isClick: true,
            // Pagination variable
            perPage: 10,
            currentPage: 1,
            showFrom: 0,
            showTo: 0,
            totalRecord: 0,
            totalPage: 0,
            // Sort
            sort: {
                username: '',
                fullname: '',
            },
            // Others
            searchKeyWord: '',
            teacherID: '',
            observerID: '',
            // Search results
            searchResults : [],
        }
    },
    /** DOM Ready */
    mounted() {

    },

    created() {
        // Get user info when load page
        this.doSearch();
    },

    methods: {
        // Search evaluation
        doSearch: function() {
            axios
                .post(this.$apiLocation.SEARCH_LIST_EVALUATION, {
                    params: {
                        searchKeyWord: this.searchKeyWord,
                        perPage: this.perPage,
                        orderby: this.sort,
                    },
                    page: this.currentPage,
                })
                .then(res => {
                    let dataSearchs         = res.data.dataSearch;
                    this.searchResults      = dataSearchs.data;

                    // Value of pagination
                    this.totalRecord = dataSearchs.total;
                    this.totalPage   = dataSearchs.last_page;
                    this.showFrom    = dataSearchs.from ? dataSearchs.from : 0;
                    this.showTo      = dataSearchs.to ? dataSearchs.to : 0;
                })
                .finally(() => {
                    this.isClick = false;
                });
        },

        resetCurrentPage: function() {
            this.currentPage = 1;
        },

        // Click button search
        handleClickSearch: function() {
            if(this.isClick == true) {
                return true;
            }
            this.isClick = true;
            this.doSearch();
        },

        // Click search by keyword
        handleSearchKeyWord: function() {
            if(this.isClick == true) {
                return true;
            }
            this.isClick = true;
            this.resetCurrentPage();
            this.searchKeyWord = $("#txt-search-key-word").val();
            this.doSearch();
        },

        // Change ranger page
        handleChangePerPage: function(e) {
            this.isClick = true;
            this.resetCurrentPage();
            this.perPage = Number(e.target.value);
            if (this.totalRecord <= 0) {
                this.isClick = false;
                return;
            }
            this.doSearch();
        },

        // Click to the pagination
        handlePaginate: function(pageNum) {
            if(this.isClick == true) {
                return true;
            }
            this.isClick = true;
            this.currentPage = pageNum;
            this.doSearch();
        },

        // Sort field
        handleSortField: function(field) {
            if(this.isClick == true) {
                return true;
            }
            this.isClick = true;
            let currentSort = this.sort[field];
            let newSort = '';
            this.sort = {};

            if (currentSort === 'asc') {
                newSort = 'desc';
            } else {
                newSort = 'asc';
            }
            this.sort[field] = newSort;
            if (this.totalRecord <= 0) {
                this.isClick = false;
                return true;
            };
            this.doSearch();
        },

        // Goto detail page
        goToDetail: function(id) {
            let urlDetail = this.$apiLocation.EVALUATION_DETAIL(id);
            this.$apiLocation.path(urlDetail);
        },
    }
});
