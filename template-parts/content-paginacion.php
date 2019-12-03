<?php

/**
 * @param WP_Query|null $wp_query
 * @param bool $echo
 * 
 * @return string
 */

function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true)
{
    if (null === $wp_query) {
        global $wp_query;
    }

    $pages = paginate_links([
        'base'          => '?paged=%#%',
        'current'       => max(1,get_query_var( 'paged' )),
        'total'         => $wp_query->max_num_pages,
        'type'          => 'array',
        'show_all'      => false,
        'end_size'      => 3,
        'mid_size'      => 1,
        'prev_next'     => true,
        'prev_text'     => __( 'Anterior' ),
        'next_text'     => __( 'Siguiente' ),
        'add_args'      => false,
        'add_fragments' => ''
    ]);

    if ( is_array( $pages ) ) {
        $pagination = '<div class="pagination"><ul class="pagination">';

        foreach ($pages as $page) {
            $pagination .= '<li class="page-item '.(strpos($page, 'current') !== false ? 'active' : '').'"> ' . str_replace( 'page-numbers', 'page-link', $page ) . '</li>';
        }

        $pagination .= '</ul></div>';

        if ( $echo ) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}

echo bootstrap_pagination();

?>