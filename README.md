# Bootstraptowp

This is a WordPress theme made from scratch with bootstrap components, for training purposes.

It's going to be used as a starter kit for personal theme developments. All Bootstrap classes and glyphicons can be used.

## Installation

**Download and install theme**
This repo is the wordpress theme folder itself, so:
- Download repository to your computer
- Upload folder as is (you may want to delete the `.git` hidden file rand `README.md` file before uploading it to your Wordpress installation). Two ways:
    + Zip it and upload it via Wordpress admin panel (Appearence > Themes > Add new)
    + Upload via FTP the entire folder to the `themes` folder (/wp-content/themes)
- Activate theme via wordpress admin panel (Appearence > Themes)

**Download and install used plugins**
Via Wordpress admin panel (Plugins > Add new), download and install:
- [Advanced Custom Fields (ACF)](https://wordpress.org/plugins/advanced-custom-fields/)
- [Custom Post Type UI (CPT UI)](https://wordpress.org/plugins/custom-post-type-ui/)
- [Bootstrap Shortcodes](https://wordpress.org/plugins/bootstrap-shortcodes/)
- [Ninja Forms](https://wordpress.org/plugins/ninja-forms/)
- [Black Studio TinyMCE Widget](https://wordpress.org/plugins/black-studio-tinymce-widget/)

IMPORTANT NOTE: after installing the 'Bootstrap Shortcodes' plugin, go to Settings > BS Shortcodes, and uncheck 'Load Twitter Boostrap CSS file' and 'Load Twitter Bootstrap javascript file'. Those files are already being added manually. Othwerise theme will break.

**Create used Custom Post Type**
This theme uses 'portfolio' custom post type created via plugin.
- Using CPT UI plugin create 'portfolio' custom post type
- Using ACF plugin create its fields:
    + New field group: 'Portfolio'
    + Field Label: Link
    + Fielf Name: link
    + Type: 'text'
    + Rules: 'Post Type', 'is equal to', 'portfolio'
    + Hide on screen: leave unchecked only 'Permalink', 'Content Editor', 'Featured Image'

## Usage

**Change home page display: IMPORTANT**

_If you want 'Blog Posts' being shown on home page_, delete or change the name of the 'front-page.php' file and leave the default options under Settings > Reading, in 'Front Page Displays' ('Your Latests Posts' selected on the dropdown).

_Otherwise, if you don't want blog posts being shown on the home page, but a static page and select another page as the Blog page, follow theses steps:_

Create a new Page called 'Home'. It will be used as the home page of the site. So you can add here the content you want to be shown in as the main content of your home page. Later, you will see that you have 3 widget areas to add some content via Admin Panel on 'Front Page Left', 'Front Page Center' and 'Front Page Right' widget areas. Those are added as 3 boxes underneath the content you added as the main content of the home page. Save it.

Create another new Page called 'Blog' and save it.

Under Settings > Reading, in 'Front Page Displays' select 'A Static Page' and in the dropdowns below, for 'Front Page' dropdown select 'Home' and for 'Posts Page' select 'Blog'

**Custom templates**
You have a 'Full Width' template for pages where yoy don't want the sidebar to appear. Just select 'Full Width Template' before saving the changes on that page, under 'Attributes' column and in the 'Template' dropdown on the edit page screen on the Admin Area.

**Custom Post Type 'Portfolio'**

Create some new items under the option on the Admin Panel menu 'Portoflio' (add some text, a url and a featured image).

After it you have to create a listing page for theses elements. So create a new page (name for example 'Portfolio Pieces') and before saving it, under the 'Page Attributes' column, on the 'Template' dropdown select 'Porftolio Index Page Template' to assign this page to the template that iterates through this post type.

**Add content to widget areas**

The 'Bootstrap Shortcodes' and 'Black Studio TinyMCE Widget' plugins are reccomended. With those plugins installed we are going to be able of adding content with rich text editor (a WYSIWYG editor) in the widget editor and also haveing access to bootstrap shortcodes (we can give it a style of columns, buttons, etc from shortcodes)

This theme has 6 widget areas:
- 3 for the home page if 'Front Page Displays' is set to 'A static Page': 'Front Page Left', 'Front Page Center' and 'Front Page Right'
- 'Page Sidebar': shows on pages as default
- 'Blog Posts Page Sidebar': shows on blog posts listing page
- 'Archive Listing Page Sidebar': shows on all archive pages

**Blog Post Slider**
On the Blog Posts Index page, there is a featured posts slider. It grabs the posts under the 'featured' category and make a slider using Bootstrap Components. Every blog post under that category will be added to the slider.

**Need some customized JS code?**
Add it to the `js/theme.js` file inside the theme folder. It will be enqueued correctly before the closing `body` tag via functions.php so you don't need to add files manually.

## Links
[Bootstrap to Wordpress Theme Home page](http://nicolasblancom.com/bootstraptowp-theme)
