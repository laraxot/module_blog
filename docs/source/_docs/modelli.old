---
title: Models
description: About Blog models
extends: _layouts.documentation
section: content
---

# Modelli {#modelli}

### Article / ArticleMorph

Article using id, parent_type and parent_id, with BaseModelLang.

### Categorizable

Polymorphic model to associate a *category_id* with a *categorizable_type* and *categorizable_id*.

### Category

Category (using NestedSet, then ancestors, parent, children, siblin, descendants, too).

### Comment

Post Comment, using polymorphic relation to Post (id,post_type,post_id) and BaseModelLang

### Contact

Blog Contact. Only Polymorphic relation to Post (BaseModelLang)

### Event / EventMorph

Event with address, place, etc (BaseModelLang).
Polymorphic relation between translations (Post) and event_id

### Feed

A feed is a source of information that is constantly updated, such as a blog or news website. Typically, a feed is delivered in the form of a feed reader (example RSS Feed), which is a software program that allows users to access and view the latest updates from multiple feeds in one place. Feeds can be used to keep up with the latest news, follow blogs or other websites, and stay up-to-date on any topic that interests you.

### Home

Home model uses Sushi. Sushi is a package for the Laravel PHP framework. It provides a set of tools and helpers for working with the Eloquent ORM, which is a way of interacting with a database from within Laravel. The package is designed to make it easier to work with Eloquent and to help developers write cleaner, more maintainable code. Some of the features of Sushi include support for nested relationships, custom casting, and an improved API for working with Eloquent models.

Home models and Home panels manage the rows to sent to public theme (pub_theme)

### Image

Handles the images.

### Label

For example, in a cooking blog, labels might include 'vegetarian recipes', 'dessert recipes', and so on.

### Like

Handles the likes.

### Media

Uses Spatie Media Library to handle media.

Spatie Media Library is a package for the Laravel PHP framework that allows developers to easily associate files with Eloquent models. This means that you can attach files, such as images or documents, to your model records and then retrieve and manage those files. The package provides a simple and flexible way to handle file uploads and attachments, making it easier to manage the files associated with your application's data.

### Page

Reads the blade files from main_module or pub_theme (see xra.php). Then it uses these blades like Page Models.
Then you can use the url http://domain.xx/en/pages/blade_name. The route will be auto generated.

### Photo / PhotoMorph

Handles photos and has polymorphic relation to Post translations (BaseModelLang).

### Post

Handles translations. In Laravel, a polymorphic relationship allows a model to belong to more than one other model on a single association. This is useful when you have multiple models that can have the same type of relationship to another model.

For example, imagine that you have a Post model and a Comment model, and you want to be able to translate both of these models into different languages. You could create a Translation model that has a polymorphic relationship with both the Post and the Comment models. This would allow you to store all of the translations for both the posts and the comments in a single table, using the polymorphic relationship to distinguish between the different types of translated models.

To create a polymorphic relationship in Laravel, you would define the relationship on both the parent and the child models. On the Translation model, you would define a belongsTo relationship that specifies the Post and Comment models as the possible parent models. Then, on the Post and Comment models, you would define a morphMany relationship that specifies the Translation model as the child model.

Once the relationship is set up, you can use the Eloquent ORM to easily retrieve and manage the translations for your posts and comments. For example, you could use the $post->translations property to retrieve all of the translations for a given post, or you could use the $comment->translations property to retrieve all of the translations for a comment.

### Privacy / PrivacyMorph

### Profile

Uses HasProfileTrait too, then BelongsTo one LU/User. It's the bloggers and users Profile model.

### Sitemap

### Status

### XotBaseModel

Extends XotBaseModel and uses LinkedTrait.