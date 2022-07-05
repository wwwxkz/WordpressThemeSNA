<nav class="desktop navbar fixed-top" id="pesquisa-container">
    <form role="search" id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>" style="margin: 0;">
        <div class="container-fluid">
            <div style="flex-grow: 1;">
                <div class="input-group flex-nowrap">
                    <input type="hidden" class="form-control" name="post_type" value="post" />
                    <input type="search" class="form-control" placeholder="Faça aqui sua pesquisa por notícias e assuntos" value="<?php echo get_search_query(); ?>" name="s">
                    <button type="submit" class="search-button">
                        <span class="desktop input-group-text">
                            <img class="pesquisa-icone" src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/lupa.png'; ?>"></img>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </form>
</nav>

<style>
    #pesquisa-container {
        padding-top: 20px;
        padding-bottom: 20px;
        display: block !important;
        margin-top: 155px;
        background-color: #e5e5e5;
        transition: top .25s !important;
    }

    .pesquisa-icone {
        filter: invert(18%) sepia(85%) saturate(1111%) hue-rotate(190deg) brightness(94%) contrast(91%);
        height: 20px;
    }

    .search-button {
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        border: none;
        padding: 0;
    }

    span.desktop {
        height: 100%;
        padding-right: 1rem;
        border-bottom-left-radius: 0px !important;
        border-top-left-radius: 0px !important;
        border-radius: 20px;
        background-color: white;
        border-left: none !important;
        border: none !important;
    }

    input.form-control {
        padding-left: 30px;
        font-size: smaller;
        border-right: none !important;
        border-radius: 20px !important;
        border: none !important;
        border-bottom-right-radius: 0px !important;
        border-top-right-radius: 0px !important;
    }

    @media screen and (max-width: 780px) {
        #pesquisa-container {
            margin-top: 70px;
            top: -170px;
        }

        input.form-control {
            border-bottom-right-radius: 20px !important;
            border-top-right-radius: 20px !important;
        }
    }
</style>
