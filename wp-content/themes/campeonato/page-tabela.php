<?php
// Template Name: Tabela
?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="container">
            <div class="grid">
                <table class="tabela sortable-table">
                    <thead>
                        <tr>
                            <th>Pontos</th>
                            <th>Logo</th>
                            <th>Nome</th>
                            <th>Integrantes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach( get_cfc_meta( 'times' ) as $key => $value ){ ?>
                            <tr>
                                <td class="numeric-sort"> <?php the_cfc_field( 'times','pontos', false, $key ); ?> </td>
                                <td> <img src="<?php the_cfc_field( 'times','logo', false, $key );?>"/> </td>
                                <td> <?php the_cfc_field( 'times','nome', false, $key ); ?> </td>
                                <td> <?php the_cfc_field( 'times','descricao', false, $key ); ?> </td>
                            </tr>
                        <?php }?>   
                    </tbody>
                </table>
            </div>
        
        </div>
        
	<?php endwhile; else: endif;?>

<?php get_footer(); ?>