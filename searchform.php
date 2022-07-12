<form role="search" id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>" style="margin: 0;">
    <div id="navbar-search">
        <div id="navbar-search-container">
            <input type="search" placeholder="Faça aqui sua pesquisa por notícias e assuntos" value="<?php echo get_search_query(); ?>" name="s"></input>
            <button type="submit"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/lupa.png'; ?>" /></button>
        </div>
    </div>
</form>


<style>
    #searchform {
        width: 100%;
    }

    #navbar-search {
        transition: .25s;
        display: flex;
        justify-content: center;
        width: 100%;
        background-color: #e5e5e5;
    }

    #navbar-search-container {
        display: flex;
        align-items: center;
        height: 80px;
        width: 1600px;
    }

    #navbar-search-container>input {
        border: none;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        margin-left: 30px;
        width: 100%;
        height: 40px;
        padding-left: 30px;
    }

    #navbar-search-container>button {
        border: none;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        margin-right: 30px;
        width: 60px;
        height: 40px;
    }

    #navbar-search-container>button>img {
        filter: invert(18%) sepia(85%) saturate(1111%) hue-rotate(190deg) brightness(94%) contrast(91%);
        height: 20px;
    }

    @media (max-width: 780px) {
        #navbar-search-container {
            height: 70px;
        }
        #navbar-search {
            margin-top: -240px;
        }
        #navbar-search-container>button {
            display: none;
        }
        #navbar-search-container>input {
            border-radius: 20px;
            margin-right: 30px;
        }
    }
</style>