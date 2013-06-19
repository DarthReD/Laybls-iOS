  


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>facebook-php-sdk/src/facebook.php at master · facebook/facebook-php-sdk · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <link rel="logo" type="image/svg" href="http://github-media-downloads.s3.amazonaws.com/github-logo.svg" />
    <link rel="assets" href="https://a248.e.akamai.net/assets.github.com/">
    <link rel="xhr-socket" href="/_sockets" />
    


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" />

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="kdFFj4QSe/duwpP70YpLy9ktlvB2a/ma3heUErWYVPk=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/assets/github-0c2e6b2f619f4aafd0dc861f56d66b8fc3b130eb.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/assets/github2-825f026ec649c1aabce8f2d0390fc4d3bb870964.css" media="all" rel="stylesheet" type="text/css" />
    


      <script src="https://a248.e.akamai.net/assets.github.com/assets/frameworks-4c434fa1705bf526e191eec0cd8fab1a5ce3e326.js" type="text/javascript"></script>
      <script src="https://a248.e.akamai.net/assets.github.com/assets/github-fa0e576ffff9e151472d56e5f4512a9053a68a12.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="51c0b4a5726a8cb47213bcf36c3dd471">

        <link data-pjax-transient rel='permalink' href='/facebook/facebook-php-sdk/blob/16d696c138b82003177d0b4841a3e4652442e5b1/src/facebook.php'>
    <meta property="og:title" content="facebook-php-sdk"/>
    <meta property="og:type" content="githubog:gitrepository"/>
    <meta property="og:url" content="https://github.com/facebook/facebook-php-sdk"/>
    <meta property="og:image" content="https://secure.gravatar.com/avatar/18a83f753fa76b3ea0d594247f4c93b1?s=420&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png"/>
    <meta property="og:site_name" content="GitHub"/>
    <meta property="og:description" content="facebook-php-sdk - Facebook PHP SDK"/>
    <meta property="twitter:card" content="summary"/>
    <meta property="twitter:site" content="@GitHub">
    <meta property="twitter:title" content="facebook/facebook-php-sdk"/>

    <meta name="description" content="facebook-php-sdk - Facebook PHP SDK" />


    <meta content="69631" name="octolytics-dimension-user_id" /><meta content="facebook" name="octolytics-dimension-user_login" /><meta content="3077368" name="octolytics-dimension-repository_id" /><meta content="facebook/facebook-php-sdk" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="3077368" name="octolytics-dimension-repository_network_root_id" /><meta content="facebook/facebook-php-sdk" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/facebook/facebook-php-sdk/commits/master.atom" rel="alternate" title="Recent Commits to facebook-php-sdk:master" type="application/atom+xml" />

  </head>


  <body class="logged_out page-blob windows vis-public env-production  ">
    <div id="wrapper">

      
      
      

      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">Github</a>

    <div class="header-actions">
      <a class="button primary" href="/signup">Sign up</a>
      <a class="button" href="/login?return_to=%2Ffacebook%2Ffacebook-php-sdk%2Fblob%2Fmaster%2Fsrc%2Ffacebook.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">


      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="http://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">
  <a href="/search/advanced" class="advanced-search-icon tooltipped downwards command-bar-search" id="advanced_search" title="Advanced search"><span class="octicon octicon-gear "></span></a>

  <input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
      data-repo="facebook/facebook-php-sdk"
      data-branch="master"
      data-sha="4f820a6fda7025c5daffbeced13181eb33c025f2"
  >

    <input type="hidden" name="nwo" value="facebook/facebook-php-sdk" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" title="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

  <div class="divider-vertical"></div>

</form>
    </div>

  </div>
</div>


      


            <div class="site hfeed" itemscope itemtype="http://schema.org/WebPage">
      <div class="hentry">
        
        <div class="pagehead repohead instapaper_ignore readability-menu ">
          <div class="container">
            <div class="title-actions-bar">
              

<ul class="pagehead-actions">



    <li>
      <a href="/login?return_to=%2Ffacebook%2Ffacebook-php-sdk"
        class="minibutton with-count js-toggler-target star-button entice tooltipped upwards"
        title="You must be signed in to use this feature" rel="nofollow">
        <span class="octicon octicon-star"></span>Star
      </a>
      <a class="social-count js-social-count" href="/facebook/facebook-php-sdk/stargazers">
        2,464
      </a>
    </li>
    <li>
      <a href="/login?return_to=%2Ffacebook%2Ffacebook-php-sdk"
        class="minibutton with-count js-toggler-target fork-button entice tooltipped upwards"
        title="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/facebook/facebook-php-sdk/network" class="social-count">
        1,661
      </a>
    </li>
</ul>

              <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
                <span class="repo-label"><span>public</span></span>
                <span class="mega-octicon octicon-repo"></span>
                <span class="author vcard">
                  <a href="/facebook" class="url fn" itemprop="url" rel="author">
                  <span itemprop="title">facebook</span>
                  </a></span> /
                <strong><a href="/facebook/facebook-php-sdk" class="js-current-repository">facebook-php-sdk</a></strong>
              </h1>
            </div>

            
  <ul class="tabs">
    <li class="pulse-nav"><a href="/facebook/facebook-php-sdk/pulse" class="js-selected-navigation-item " data-selected-links="pulse /facebook/facebook-php-sdk/pulse" rel="nofollow"><span class="octicon octicon-pulse"></span></a></li>
    <li><a href="/facebook/facebook-php-sdk" class="js-selected-navigation-item selected" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /facebook/facebook-php-sdk">Code</a></li>
    <li><a href="/facebook/facebook-php-sdk/network" class="js-selected-navigation-item " data-selected-links="repo_network /facebook/facebook-php-sdk/network">Network</a></li>
    <li><a href="/facebook/facebook-php-sdk/pulls" class="js-selected-navigation-item " data-selected-links="repo_pulls /facebook/facebook-php-sdk/pulls">Pull Requests <span class='counter'>53</span></a></li>




    <li><a href="/facebook/facebook-php-sdk/graphs" class="js-selected-navigation-item " data-selected-links="repo_graphs repo_contributors /facebook/facebook-php-sdk/graphs">Graphs</a></li>


  </ul>
  
<div class="tabnav">

  <span class="tabnav-right">
    <ul class="tabnav-tabs">
          <li><a href="/facebook/facebook-php-sdk/tags" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_tags /facebook/facebook-php-sdk/tags">Tags <span class="counter ">17</span></a></li>
    </ul>
  </span>

  <div class="tabnav-widget scope">


    <div class="select-menu js-menu-container js-select-menu js-branch-menu">
      <a class="minibutton select-menu-button js-menu-target" data-hotkey="w" data-ref="master">
        <span class="octicon octicon-git-branch"></span>
        <i>branch:</i>
        <span class="js-select-button">master</span>
      </a>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">

        <div class="select-menu-modal">
          <div class="select-menu-header">
            <span class="select-menu-title">Switch branches/tags</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-filters">
            <div class="select-menu-text-filter">
              <input type="text" id="commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
            </div>
            <div class="select-menu-tabs">
              <ul>
                <li class="select-menu-tab">
                  <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
                </li>
                <li class="select-menu-tab">
                  <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
                </li>
              </ul>
            </div><!-- /.select-menu-tabs -->
          </div><!-- /.select-menu-filters -->

          <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket css-truncate" data-tab-filter="branches">

            <div data-filterable-for="commitish-filter-field" data-filterable-type="substring">

                <div class="select-menu-item js-navigation-item selected">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/master/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="master" rel="nofollow" title="master">master</a>
                </div> <!-- /.select-menu-item -->
            </div>

              <div class="select-menu-no-results">Nothing to show</div>
          </div> <!-- /.select-menu-list -->


          <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket css-truncate" data-tab-filter="tags">
            <div data-filterable-for="commitish-filter-field" data-filterable-type="substring">

                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v3.2.2/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v3.2.2" rel="nofollow" title="v3.2.2">v3.2.2</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v3.2.1/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v3.2.1" rel="nofollow" title="v3.2.1">v3.2.1</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v3.2.0/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v3.2.0" rel="nofollow" title="v3.2.0">v3.2.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v3.1.1/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v3.1.1" rel="nofollow" title="v3.1.1">v3.1.1</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v3.1.0/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v3.1.0" rel="nofollow" title="v3.1.0">v3.1.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v3.0.1/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v3.0.1" rel="nofollow" title="v3.0.1">v3.0.1</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v3.0.0/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v3.0.0" rel="nofollow" title="v3.0.0">v3.0.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v2.1.2/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v2.1.2" rel="nofollow" title="v2.1.2">v2.1.2</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v2.1.1/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v2.1.1" rel="nofollow" title="v2.1.1">v2.1.1</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v2.1.0/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v2.1.0" rel="nofollow" title="v2.1.0">v2.1.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v2.0.7/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v2.0.7" rel="nofollow" title="v2.0.7">v2.0.7</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v2.0.6/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v2.0.6" rel="nofollow" title="v2.0.6">v2.0.6</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v2.0.4/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v2.0.4" rel="nofollow" title="v2.0.4">v2.0.4</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v2.0.3/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v2.0.3" rel="nofollow" title="v2.0.3">v2.0.3</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v2.0.2/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v2.0.2" rel="nofollow" title="v2.0.2">v2.0.2</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v2.0.1/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v2.0.1" rel="nofollow" title="v2.0.1">v2.0.1</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/facebook/facebook-php-sdk/blob/v2.0.0/src/facebook.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v2.0.0" rel="nofollow" title="v2.0.0">v2.0.0</a>
                </div> <!-- /.select-menu-item -->
            </div>

            <div class="select-menu-no-results">Nothing to show</div>

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

  </div> <!-- /.scope -->

  <ul class="tabnav-tabs">
    <li><a href="/facebook/facebook-php-sdk" class="selected js-selected-navigation-item tabnav-tab" data-selected-links="repo_source /facebook/facebook-php-sdk">Files</a></li>
    <li><a href="/facebook/facebook-php-sdk/commits/master" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_commits /facebook/facebook-php-sdk/commits/master">Commits</a></li>
    <li><a href="/facebook/facebook-php-sdk/branches" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_branches /facebook/facebook-php-sdk/branches" rel="nofollow">Branches <span class="counter ">1</span></a></li>
  </ul>

</div>

  
  
  


            
          </div>
        </div><!-- /.repohead -->

        <div id="js-repo-pjax-container" class="container context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:7aed869b2ed4d79bc38be71eb3637a5b -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:7aed869b2ed4d79bc38be71eb3637a5b -->

<div id="slider">
    <div class="frame-meta">

      <p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

        <a href="/facebook/facebook-php-sdk/find/master" class="js-slide-to" data-hotkey="t" style="display:none">Show File Finder</a>

        <div class="breadcrumb">
          <span class='bold'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/facebook/facebook-php-sdk" class="js-slide-to" data-branch="master" data-direction="back" itemscope="url"><span itemprop="title">facebook-php-sdk</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/facebook/facebook-php-sdk/tree/master/src" class="js-slide-to" data-branch="master" data-direction="back" itemscope="url"><span itemprop="title">src</span></a></span><span class="separator"> / </span><strong class="final-path">facebook.php</strong> <span class="js-zeroclipboard zeroclipboard-button" data-clipboard-text="src/facebook.php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
        </div>


        
  <div class="commit file-history-tease">
    <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/162ba763482bf53ed1d9a4589fad393f?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
    <span class="author"><a href="/daaku" rel="author">daaku</a></span>
    <time class="js-relative-date" datetime="2012-08-03T13:50:09-07:00" title="2012-08-03 13:50:09">August 03, 2012</time>
    <div class="commit-title">
        <a href="/facebook/facebook-php-sdk/commit/42481fa03f98465fd6dc6eb99a5124c01e8797d2" class="message">sharedSession support for better security on shared domains</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>8</strong> contributors</a></p>
          <a class="avatar tooltipped downwards" title="daaku" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=daaku"><img height="20" src="https://secure.gravatar.com/avatar/162ba763482bf53ed1d9a4589fad393f?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="ptarjan" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=ptarjan"><img height="20" src="https://secure.gravatar.com/avatar/4cd77fb0ea4d6cb5ad94f9ef61e17e9e?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="codler" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=codler"><img height="20" src="https://secure.gravatar.com/avatar/d400866ed03267fc211e1bdd1010ca96?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="jerrycainjr" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=jerrycainjr"><img height="20" src="https://secure.gravatar.com/avatar/1ff6e4fc5862f200d8d17bb01bc4337a?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="scottmac" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=scottmac"><img height="20" src="https://secure.gravatar.com/avatar/3c5a0318513620a5d04916e7deee6737?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="scy" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=scy"><img height="20" src="https://secure.gravatar.com/avatar/a88d36119d6a90de4a11147902143747?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="catclee" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=catclee"><img height="20" src="https://secure.gravatar.com/avatar/30873fbde826053587df49c248bef33d?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="arudolph" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=arudolph"><img height="20" src="https://secure.gravatar.com/avatar/f2c540f20b55a164a4a4a723aac8c296?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2>Users on GitHub who have contributed to this file</h2>
      <ul class="facebox-user-list">
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/162ba763482bf53ed1d9a4589fad393f?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/daaku">daaku</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/4cd77fb0ea4d6cb5ad94f9ef61e17e9e?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/ptarjan">ptarjan</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/d400866ed03267fc211e1bdd1010ca96?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/codler">codler</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/1ff6e4fc5862f200d8d17bb01bc4337a?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/jerrycainjr">jerrycainjr</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/3c5a0318513620a5d04916e7deee6737?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/scottmac">scottmac</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/a88d36119d6a90de4a11147902143747?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/scy">scy</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/30873fbde826053587df49c248bef33d?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/catclee">catclee</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/f2c540f20b55a164a4a4a723aac8c296?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/arudolph">arudolph</a>
        </li>
      </ul>
    </div>
  </div>


    </div><!-- ./.frame-meta -->

    <div class="frames">
      <div class="frame" data-permalink-url="/facebook/facebook-php-sdk/blob/16d696c138b82003177d0b4841a3e4652442e5b1/src/facebook.php" data-title="facebook-php-sdk/src/facebook.php at master · facebook/facebook-php-sdk · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="octicon octicon-file-text"></b></span>
                <span class="mode" title="File Mode">file</span>
                  <span>161 lines (143 sloc)</span>
                <span>5.217 kb</span>
              </div>
              <div class="actions">
                <div class="button-group">
                      <a class="minibutton js-entice" href=""
                         data-entice="You must be signed in and on a branch to make or propose changes">Edit</a>
                  <a href="/facebook/facebook-php-sdk/raw/master/src/facebook.php" class="button minibutton " id="raw-url">Raw</a>
                    <a href="/facebook/facebook-php-sdk/blame/master/src/facebook.php" class="button minibutton ">Blame</a>
                  <a href="/facebook/facebook-php-sdk/commits/master/src/facebook.php" class="button minibutton " rel="nofollow">History</a>
                </div><!-- /.button-group -->
              </div><!-- /.actions -->

            </div>
                <div class="blob-wrapper data type-php js-blob-data">
      <table class="file-code file-diff">
        <tr class="file-code-line">
          <td class="blob-line-nums">
            <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>

          </td>
          <td class="blob-line-code">
                  <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * Copyright 2011 Facebook, Inc.</span></div><div class='line' id='LC4'><span class="sd"> *</span></div><div class='line' id='LC5'><span class="sd"> * Licensed under the Apache License, Version 2.0 (the &quot;License&quot;); you may</span></div><div class='line' id='LC6'><span class="sd"> * not use this file except in compliance with the License. You may obtain</span></div><div class='line' id='LC7'><span class="sd"> * a copy of the License at</span></div><div class='line' id='LC8'><span class="sd"> *</span></div><div class='line' id='LC9'><span class="sd"> *     http://www.apache.org/licenses/LICENSE-2.0</span></div><div class='line' id='LC10'><span class="sd"> *</span></div><div class='line' id='LC11'><span class="sd"> * Unless required by applicable law or agreed to in writing, software</span></div><div class='line' id='LC12'><span class="sd"> * distributed under the License is distributed on an &quot;AS IS&quot; BASIS, WITHOUT</span></div><div class='line' id='LC13'><span class="sd"> * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the</span></div><div class='line' id='LC14'><span class="sd"> * License for the specific language governing permissions and limitations</span></div><div class='line' id='LC15'><span class="sd"> * under the License.</span></div><div class='line' id='LC16'><span class="sd"> */</span></div><div class='line' id='LC17'><br/></div><div class='line' id='LC18'><span class="k">require_once</span> <span class="s2">&quot;base_facebook.php&quot;</span><span class="p">;</span></div><div class='line' id='LC19'><br/></div><div class='line' id='LC20'><span class="sd">/**</span></div><div class='line' id='LC21'><span class="sd"> * Extends the BaseFacebook class with the intent of using</span></div><div class='line' id='LC22'><span class="sd"> * PHP sessions to store user ids and access tokens.</span></div><div class='line' id='LC23'><span class="sd"> */</span></div><div class='line' id='LC24'><span class="k">class</span> <span class="nc">Facebook</span> <span class="k">extends</span> <span class="nx">BaseFacebook</span></div><div class='line' id='LC25'><span class="p">{</span></div><div class='line' id='LC26'>&nbsp;&nbsp;<span class="k">const</span> <span class="no">FBSS_COOKIE_NAME</span> <span class="o">=</span> <span class="s1">&#39;fbss&#39;</span><span class="p">;</span></div><div class='line' id='LC27'><br/></div><div class='line' id='LC28'>&nbsp;&nbsp;<span class="c1">// We can set this to a high number because the main session</span></div><div class='line' id='LC29'>&nbsp;&nbsp;<span class="c1">// expiration will trump this.</span></div><div class='line' id='LC30'>&nbsp;&nbsp;<span class="k">const</span> <span class="no">FBSS_COOKIE_EXPIRE</span> <span class="o">=</span> <span class="mi">31556926</span><span class="p">;</span> <span class="c1">// 1 year</span></div><div class='line' id='LC31'><br/></div><div class='line' id='LC32'>&nbsp;&nbsp;<span class="c1">// Stores the shared session ID if one is set.</span></div><div class='line' id='LC33'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$sharedSessionID</span><span class="p">;</span></div><div class='line' id='LC34'><br/></div><div class='line' id='LC35'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC36'><span class="sd">   * Identical to the parent constructor, except that</span></div><div class='line' id='LC37'><span class="sd">   * we start a PHP session to store the user ID and</span></div><div class='line' id='LC38'><span class="sd">   * access token if during the course of execution</span></div><div class='line' id='LC39'><span class="sd">   * we discover them.</span></div><div class='line' id='LC40'><span class="sd">   *</span></div><div class='line' id='LC41'><span class="sd">   * @param Array $config the application configuration. Additionally</span></div><div class='line' id='LC42'><span class="sd">   * accepts &quot;sharedSession&quot; as a boolean to turn on a secondary</span></div><div class='line' id='LC43'><span class="sd">   * cookie for environments with a shared session (that is, your app</span></div><div class='line' id='LC44'><span class="sd">   * shares the domain with other apps).</span></div><div class='line' id='LC45'><span class="sd">   * @see BaseFacebook::__construct in facebook.php</span></div><div class='line' id='LC46'><span class="sd">   */</span></div><div class='line' id='LC47'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$config</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC48'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">session_id</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC49'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">session_start</span><span class="p">();</span></div><div class='line' id='LC50'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC51'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">parent</span><span class="o">::</span><span class="na">__construct</span><span class="p">(</span><span class="nv">$config</span><span class="p">);</span></div><div class='line' id='LC52'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;sharedSession&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC53'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">initSharedSession</span><span class="p">();</span></div><div class='line' id='LC54'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC55'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC56'><br/></div><div class='line' id='LC57'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">static</span> <span class="nv">$kSupportedKeys</span> <span class="o">=</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;state&#39;</span><span class="p">,</span> <span class="s1">&#39;code&#39;</span><span class="p">,</span> <span class="s1">&#39;access_token&#39;</span><span class="p">,</span> <span class="s1">&#39;user_id&#39;</span><span class="p">);</span></div><div class='line' id='LC59'><br/></div><div class='line' id='LC60'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">initSharedSession</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC61'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cookie_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSharedSessionCookieName</span><span class="p">();</span></div><div class='line' id='LC62'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">[</span><span class="nv">$cookie_name</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC63'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$data</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parseSignedRequest</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">[</span><span class="nv">$cookie_name</span><span class="p">]);</span></div><div class='line' id='LC64'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$data</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;domain&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span></div><div class='line' id='LC65'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">isAllowedDomain</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getHttpHost</span><span class="p">(),</span> <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;domain&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// good case</span></div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span> <span class="o">=</span> <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;id&#39;</span><span class="p">];</span></div><div class='line' id='LC68'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC70'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// ignoring potentially unreachable data</span></div><div class='line' id='LC71'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// evil/corrupt/missing case</span></div><div class='line' id='LC73'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$base_domain</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getBaseDomain</span><span class="p">();</span></div><div class='line' id='LC74'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nb">uniqid</span><span class="p">(</span><span class="nx">mt_rand</span><span class="p">(),</span> <span class="k">true</span><span class="p">));</span></div><div class='line' id='LC75'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cookie_value</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">makeSignedRequest</span><span class="p">(</span></div><div class='line' id='LC76'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span></div><div class='line' id='LC77'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;domain&#39;</span> <span class="o">=&gt;</span> <span class="nv">$base_domain</span><span class="p">,</span></div><div class='line' id='LC78'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;id&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span><span class="p">,</span></div><div class='line' id='LC79'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">)</span></div><div class='line' id='LC80'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC81'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_COOKIE</span><span class="p">[</span><span class="nv">$cookie_name</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$cookie_value</span><span class="p">;</span></div><div class='line' id='LC82'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">headers_sent</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC83'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$expire</span> <span class="o">=</span> <span class="nb">time</span><span class="p">()</span> <span class="o">+</span> <span class="nx">self</span><span class="o">::</span><span class="na">FBSS_COOKIE_EXPIRE</span><span class="p">;</span></div><div class='line' id='LC84'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">setcookie</span><span class="p">(</span><span class="nv">$cookie_name</span><span class="p">,</span> <span class="nv">$cookie_value</span><span class="p">,</span> <span class="nv">$expire</span><span class="p">,</span> <span class="s1">&#39;/&#39;</span><span class="p">,</span> <span class="s1">&#39;.&#39;</span><span class="o">.</span><span class="nv">$base_domain</span><span class="p">);</span></div><div class='line' id='LC85'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC86'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// @codeCoverageIgnoreStart</span></div><div class='line' id='LC87'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span></div><div class='line' id='LC88'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Shared session ID cookie could not be set! You must ensure you &#39;</span><span class="o">.</span></div><div class='line' id='LC89'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;create the Facebook instance before headers have been sent. This &#39;</span><span class="o">.</span></div><div class='line' id='LC90'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;will cause authentication issues after the first request.&#39;</span></div><div class='line' id='LC91'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC92'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// @codeCoverageIgnoreEnd</span></div><div class='line' id='LC93'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC94'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC95'><br/></div><div class='line' id='LC96'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC97'><span class="sd">   * Provides the implementations of the inherited abstract</span></div><div class='line' id='LC98'><span class="sd">   * methods.  The implementation uses PHP sessions to maintain</span></div><div class='line' id='LC99'><span class="sd">   * a store for authorization codes, user ids, CSRF states, and</span></div><div class='line' id='LC100'><span class="sd">   * access tokens.</span></div><div class='line' id='LC101'><span class="sd">   */</span></div><div class='line' id='LC102'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">setPersistentData</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC103'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$kSupportedKeys</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC104'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span><span class="s1">&#39;Unsupported key passed to setPersistentData.&#39;</span><span class="p">);</span></div><div class='line' id='LC105'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC106'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC107'><br/></div><div class='line' id='LC108'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$session_var_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">constructSessionVariableName</span><span class="p">(</span><span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC109'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_SESSION</span><span class="p">[</span><span class="nv">$session_var_name</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$value</span><span class="p">;</span></div><div class='line' id='LC110'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC111'><br/></div><div class='line' id='LC112'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getPersistentData</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$default</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC113'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$kSupportedKeys</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC114'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span><span class="s1">&#39;Unsupported key passed to getPersistentData.&#39;</span><span class="p">);</span></div><div class='line' id='LC115'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$default</span><span class="p">;</span></div><div class='line' id='LC116'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC117'><br/></div><div class='line' id='LC118'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$session_var_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">constructSessionVariableName</span><span class="p">(</span><span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC119'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$_SESSION</span><span class="p">[</span><span class="nv">$session_var_name</span><span class="p">])</span> <span class="o">?</span></div><div class='line' id='LC120'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_SESSION</span><span class="p">[</span><span class="nv">$session_var_name</span><span class="p">]</span> <span class="o">:</span> <span class="nv">$default</span><span class="p">;</span></div><div class='line' id='LC121'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC122'><br/></div><div class='line' id='LC123'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">clearPersistentData</span><span class="p">(</span><span class="nv">$key</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC124'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$kSupportedKeys</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC125'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span><span class="s1">&#39;Unsupported key passed to clearPersistentData.&#39;</span><span class="p">);</span></div><div class='line' id='LC126'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC127'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC128'><br/></div><div class='line' id='LC129'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$session_var_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">constructSessionVariableName</span><span class="p">(</span><span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC130'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$_SESSION</span><span class="p">[</span><span class="nv">$session_var_name</span><span class="p">]);</span></div><div class='line' id='LC131'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC132'><br/></div><div class='line' id='LC133'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">clearAllPersistentData</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC134'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$kSupportedKeys</span> <span class="k">as</span> <span class="nv">$key</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC135'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearPersistentData</span><span class="p">(</span><span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC136'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC137'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC138'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">deleteSharedSessionCookie</span><span class="p">();</span></div><div class='line' id='LC139'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC140'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC141'><br/></div><div class='line' id='LC142'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">deleteSharedSessionCookie</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC143'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cookie_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSharedSessionCookieName</span><span class="p">();</span></div><div class='line' id='LC144'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">[</span><span class="nv">$cookie_name</span><span class="p">]);</span></div><div class='line' id='LC145'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$base_domain</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getBaseDomain</span><span class="p">();</span></div><div class='line' id='LC146'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">setcookie</span><span class="p">(</span><span class="nv">$cookie_name</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="mi">1</span><span class="p">,</span> <span class="s1">&#39;/&#39;</span><span class="p">,</span> <span class="s1">&#39;.&#39;</span><span class="o">.</span><span class="nv">$base_domain</span><span class="p">);</span></div><div class='line' id='LC147'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC148'><br/></div><div class='line' id='LC149'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getSharedSessionCookieName</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC150'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="na">FBSS_COOKIE_NAME</span> <span class="o">.</span> <span class="s1">&#39;_&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAppId</span><span class="p">();</span></div><div class='line' id='LC151'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC152'><br/></div><div class='line' id='LC153'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">constructSessionVariableName</span><span class="p">(</span><span class="nv">$key</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC154'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$parts</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;fb&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAppId</span><span class="p">(),</span> <span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC155'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC156'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">array_unshift</span><span class="p">(</span><span class="nv">$parts</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span><span class="p">);</span></div><div class='line' id='LC157'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC158'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">implode</span><span class="p">(</span><span class="s1">&#39;_&#39;</span><span class="p">,</span> <span class="nv">$parts</span><span class="p">);</span></div><div class='line' id='LC159'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC160'><span class="p">}</span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>

        <a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
        <div id="jump-to-line" style="display:none">
          <form accept-charset="UTF-8" class="js-jump-to-line-form">
            <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;">
            <button type="submit" class="button">Go</button>
          </form>
        </div>

      </div>
    </div>
</div>

<div id="js-frame-loading-template" class="frame frame-loading large-loading-area" style="display:none;">
  <img class="js-frame-loading-spinner" src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-128.gif" height="64" width="64">
</div>


        </div>
      </div>
      <div class="modal-backdrop"></div>
    </div>

      <div id="footer-push"></div><!-- hack for sticky footer -->
    </div><!-- end of wrapper - hack for sticky footer -->

      <!-- footer -->
      <div id="footer">
  <div class="container clearfix">

      <dl class="footer_nav">
        <dt>GitHub</dt>
        <dd><a href="/about">About us</a></dd>
        <dd><a href="/blog">Blog</a></dd>
        <dd><a href="/contact">Contact &amp; support</a></dd>
        <dd><a href="http://enterprise.github.com/">GitHub Enterprise</a></dd>
        <dd><a href="http://status.github.com/">Site status</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Applications</dt>
        <dd><a href="http://mac.github.com/">GitHub for Mac</a></dd>
        <dd><a href="http://windows.github.com/">GitHub for Windows</a></dd>
        <dd><a href="http://eclipse.github.com/">GitHub for Eclipse</a></dd>
        <dd><a href="http://mobile.github.com/">GitHub mobile apps</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Services</dt>
        <dd><a href="http://get.gaug.es/">Gauges: Web analytics</a></dd>
        <dd><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></dd>
        <dd><a href="https://gist.github.com">Gist: Code snippets</a></dd>
        <dd><a href="http://jobs.github.com/">Job board</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Documentation</dt>
        <dd><a href="http://help.github.com/">GitHub Help</a></dd>
        <dd><a href="http://developer.github.com/">Developer API</a></dd>
        <dd><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></dd>
        <dd><a href="http://pages.github.com/">GitHub Pages</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>More</dt>
        <dd><a href="http://training.github.com/">Training</a></dd>
        <dd><a href="/edu">Students &amp; teachers</a></dd>
        <dd><a href="http://shop.github.com">The Shop</a></dd>
        <dd><a href="/plans">Plans &amp; pricing</a></dd>
        <dd><a href="http://octodex.github.com/">The Octodex</a></dd>
      </dl>

      <hr class="footer-divider">


    <p class="right">&copy; 2013 <span title="0.05298s from fe13.rs.github.com">GitHub</span>, Inc. All rights reserved.</p>
    <a class="left" href="/">
      <span class="mega-octicon octicon-mark-github"></span>
    </a>
    <ul id="legal">
        <li><a href="/site/terms">Terms of Service</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
    </ul>

  </div><!-- /.container -->

</div><!-- /.#footer -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/facebook/facebook-php-sdk/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

    
    <span id='server_response_time' data-time='0.05338' data-host='fe13'></span>
    
  </body>
</html>
