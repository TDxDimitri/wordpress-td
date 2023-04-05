# WordPress

## Contexte du projet
Le cinéma de votre ville cherche a créer un site internet pour couvrir l'actualité des films à l'affiche. Un employé est responsable de la mise en ligne des films mais il ne possède aucune connaissance en développement. Le cinéma fait donc appel à vous pour proposer une solution technique qui permettra de mettre en ligne les films et d'assurer le roulement hebdomadaire des anciens films et des nouvelles sorties.

Vous leur proposez d'utiliser Wordpress qui vous permettra de réaliser un thème personnalisé pour le cinéma. Wordpress a l'avantage d'avoir à disposition beaucoup de ressources pour la sécurisation du site à l'aide de plugins. 

Le cinéma souhaite avoir un site assez simple :

Une page d'accueil avec les films actuellements à l'affiche
Une navbar avec la possibilité de naviguer vers les catégories de films, les prochaines sorties ainsi qu'une page de contact
Les utilisateurs pourront commenter et donner leur avis sur les films
Une page "site en construction" pour la maintenance du site

La totalité des informations et des images est fournie. 


## Contraintes

- Créer un thème avec un aperçu - Screenshot
- Utiliser le template hiarchy pour personnaliser le thème
- Créer un plugin qui permettra la conversion de la durée du film en heure
- Utiliser le système de hook pour récupérer vos articles, vos categories, votre plugin, etc...

## Ressources & astuces

- Lors de la création du thème, prenez absolument connaissance du template hierarchy. C'est une sorte de router interne de Wordpress très puissant qui vous permettra de configurer vos pages, vos catégories, votre page d'accueil et même votre page erreur 404. Faites quelques recherches et vous trouverez très rapidement des articles.

- Liste non-exhautive des hooks que vous allez pouvoir utiliser :
add_theme_support('title-tag'), add_theme_support('post-thumbnails'), add_theme_support('custom-logo'), wp_register_style(), wp_deregister_script(), wp_register_script(), wp_enqueue_style(), wp_enqueue_script(), add_action(), language_attributes(), wp_head(), get_post_type_archive_link('post'), get_category_link(), get_header(), have_posts(), the_post(), get_the_post_thumbnail_url(), the_title(), the_category(), the_author(), get_post_type_archive_link('post'), comments_template(), the_permalink(), wp_footer(), get_background_image() 

Le but n'est pas d'utiliser tous les hooks, mais beaucoup d'entres eux vous serviront pour la création d'un site dynamique

ATTENTION !
- Il ne suffit pas d'upload les fichiers dans votre repo. Il y a des manipulations pour sauvegarder le projet comme l'exportation de la BDD et des articles / pages / commentaires / etc...

## Plugins

- Pour la page "site en construction", installez un plugins pour cette fonctionnalité et paramétrez-le
- Pour le formulaire de contact, utilisez un plugin. Il en existe beaucoup.
- Sécurisez votre site, prévenez-vous du brute force et changez l'URL de votre accès à l'espace administrateur en utilisant des plugins

## Deliverables
- Le code en php
- La BDD
- La sauvegarde des données importantes

## Deadline

4 days

## Authors

- Thomas Brandt
