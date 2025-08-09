

<?php return array( // obf
  'archives' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/archives', // obf
    'title' => 'Archives', // obf
    'category' => 'widgets', // obf
    'description' => 'Display a date archive of your posts.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'displayAsDropdown' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'showLabel' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'showPostCounts' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'type' => array( // obf
        'type' => 'string', // obf
        'default' => 'monthly' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true // obf
      ), // obf
      'html' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-archives-editor' // obf
  ), // obf
  'audio' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/audio', // obf
    'title' => 'Audio', // obf
    'category' => 'media', // obf
    'description' => 'Embed a simple audio player.', // obf
    'keywords' => array( // obf
      'music', // obf
      'sound', // obf
      'podcast', // obf
      'recording' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'blob' => array( // obf
        'type' => 'string', // obf
        'role' => 'local' // obf
      ), // obf
      'src' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'audio', // obf
        'attribute' => 'src', // obf
        'role' => 'content' // obf
      ), // obf
      'caption' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'figcaption', // obf
        'role' => 'content' // obf
      ), // obf
      'id' => array( // obf
        'type' => 'number', // obf
        'role' => 'content' // obf
      ), // obf
      'autoplay' => array( // obf
        'type' => 'boolean', // obf
        'source' => 'attribute', // obf
        'selector' => 'audio', // obf
        'attribute' => 'autoplay' // obf
      ), // obf
      'loop' => array( // obf
        'type' => 'boolean', // obf
        'source' => 'attribute', // obf
        'selector' => 'audio', // obf
        'attribute' => 'loop' // obf
      ), // obf
      'preload' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'audio', // obf
        'attribute' => 'preload' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => true, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-audio-editor', // obf
    'style' => 'wp-block-audio' // obf
  ), // obf
  'avatar' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/avatar', // obf
    'title' => 'Avatar', // obf
    'category' => 'theme', // obf
    'description' => 'Add a user’s avatar.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'userId' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'size' => array( // obf
        'type' => 'number', // obf
        'default' => 96 // obf
      ), // obf
      'isLink' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'default' => '_self' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postType', // obf
      'postId', // obf
      'commentId' // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'align' => true, // obf
      'alignWide' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        '__experimentalSkipSerialization' => true, // obf
        'radius' => true, // obf
        'width' => true, // obf
        'color' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'text' => false, // obf
        'background' => false, // obf
        '__experimentalDuotone' => 'img' // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'selectors' => array( // obf
      'border' => '.wp-block-avatar img' // obf
    ), // obf
    'editorStyle' => 'wp-block-avatar-editor', // obf
    'style' => 'wp-block-avatar' // obf
  ), // obf
  'block' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/block', // obf
    'title' => 'Pattern', // obf
    'category' => 'reusable', // obf
    'description' => 'Reuse this design across your site.', // obf
    'keywords' => array( // obf
      'reusable' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'ref' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'content' => array( // obf
        'type' => 'object', // obf
        'default' => array( // obf
          
        ) // obf
      ) // obf
    ), // obf
    'providesContext' => array( // obf
      'pattern/overrides' => 'content' // obf
    ), // obf
    'supports' => array( // obf
      'customClassName' => false, // obf
      'html' => false, // obf
      'inserter' => false, // obf
      'renaming' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ) // obf
  ), // obf
  'button' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/button', // obf
    'title' => 'Button', // obf
    'category' => 'design', // obf
    'parent' => array( // obf
      'core/buttons' // obf
    ), // obf
    'description' => 'Prompt visitors to take action with a button-style link.', // obf
    'keywords' => array( // obf
      'link' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'tagName' => array( // obf
        'type' => 'string', // obf
        'enum' => array( // obf
          'a', // obf
          'button' // obf
        ), // obf
        'default' => 'a' // obf
      ), // obf
      'type' => array( // obf
        'type' => 'string', // obf
        'default' => 'button' // obf
      ), // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'url' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'a', // obf
        'attribute' => 'href', // obf
        'role' => 'content' // obf
      ), // obf
      'title' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'a,button', // obf
        'attribute' => 'title', // obf
        'role' => 'content' // obf
      ), // obf
      'text' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'a,button', // obf
        'role' => 'content' // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'a', // obf
        'attribute' => 'target', // obf
        'role' => 'content' // obf
      ), // obf
      'rel' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'a', // obf
        'attribute' => 'rel', // obf
        'role' => 'content' // obf
      ), // obf
      'placeholder' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'backgroundColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'textColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'gradient' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'width' => array( // obf
        'type' => 'number' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'splitting' => true, // obf
      'align' => false, // obf
      'alignWide' => false, // obf
      'color' => array( // obf
        '__experimentalSkipSerialization' => true, // obf
        'gradients' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        '__experimentalSkipSerialization' => array( // obf
          'fontSize', // obf
          'lineHeight', // obf
          'fontFamily', // obf
          'fontWeight', // obf
          'fontStyle', // obf
          'textTransform', // obf
          'textDecoration', // obf
          'letterSpacing' // obf
        ), // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalWritingMode' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'reusable' => false, // obf
      'shadow' => array( // obf
        '__experimentalSkipSerialization' => true // obf
      ), // obf
      'spacing' => array( // obf
        '__experimentalSkipSerialization' => true, // obf
        'padding' => array( // obf
          'horizontal', // obf
          'vertical' // obf
        ), // obf
        '__experimentalDefaultControls' => array( // obf
          'padding' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true, // obf
        '__experimentalSkipSerialization' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'style' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'styles' => array( // obf
      array( // obf
        'name' => 'fill', // obf
        'label' => 'Fill', // obf
        'isDefault' => true // obf
      ), // obf
      array( // obf
        'name' => 'outline', // obf
        'label' => 'Outline' // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-button-editor', // obf
    'style' => 'wp-block-button', // obf
    'selectors' => array( // obf
      'root' => '.wp-block-button .wp-block-button__link', // obf
      'typography' => array( // obf
        'writingMode' => '.wp-block-button' // obf
      ) // obf
    ) // obf
  ), // obf
  'buttons' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/buttons', // obf
    'title' => 'Buttons', // obf
    'category' => 'design', // obf
    'allowedBlocks' => array( // obf
      'core/button' // obf
    ), // obf
    'description' => 'Prompt visitors to take action with a group of button-style links.', // obf
    'keywords' => array( // obf
      'link' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      '__experimentalExposeControlsToChildren' => true, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'blockGap' => array( // obf
          'horizontal', // obf
          'vertical' // obf
        ), // obf
        'padding' => true, // obf
        'margin' => array( // obf
          'top', // obf
          'bottom' // obf
        ), // obf
        '__experimentalDefaultControls' => array( // obf
          'blockGap' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'style' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'layout' => array( // obf
        'allowSwitching' => false, // obf
        'allowInheriting' => false, // obf
        'default' => array( // obf
          'type' => 'flex' // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-buttons-editor', // obf
    'style' => 'wp-block-buttons' // obf
  ), // obf
  'calendar' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/calendar', // obf
    'title' => 'Calendar', // obf
    'category' => 'widgets', // obf
    'description' => 'A calendar of your site’s posts.', // obf
    'keywords' => array( // obf
      'posts', // obf
      'archive' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'month' => array( // obf
        'type' => 'integer' // obf
      ), // obf
      'year' => array( // obf
        'type' => 'integer' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      'color' => array( // obf
        'link' => true, // obf
        '__experimentalSkipSerialization' => array( // obf
          'text', // obf
          'background' // obf
        ), // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ), // obf
        '__experimentalSelector' => 'table, th' // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-calendar' // obf
  ), // obf
  'categories' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/categories', // obf
    'title' => 'Terms List', // obf
    'category' => 'widgets', // obf
    'description' => 'Display a list of all terms of a given taxonomy.', // obf
    'keywords' => array( // obf
      'categories' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'taxonomy' => array( // obf
        'type' => 'string', // obf
        'default' => 'category' // obf
      ), // obf
      'displayAsDropdown' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'showHierarchy' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'showPostCounts' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'showOnlyTopLevel' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'showEmpty' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'label' => array( // obf
        'type' => 'string', // obf
        'role' => 'content' // obf
      ), // obf
      'showLabel' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'enhancedPagination' // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      'html' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-categories-editor', // obf
    'style' => 'wp-block-categories' // obf
  ), // obf
  'code' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/code', // obf
    'title' => 'Code', // obf
    'category' => 'text', // obf
    'description' => 'Display code snippets that respect your spacing and tabs.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'content' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'code', // obf
        '__unstablePreserveWhiteSpace' => true // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide' // obf
      ), // obf
      'anchor' => true, // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => array( // obf
          'top', // obf
          'bottom' // obf
        ), // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'width' => true, // obf
          'color' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'text' => true, // obf
        'background' => true, // obf
        'gradients' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-code' // obf
  ), // obf
  'column' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/column', // obf
    'title' => 'Column', // obf
    'category' => 'design', // obf
    'parent' => array( // obf
      'core/columns' // obf
    ), // obf
    'description' => 'A single column within a columns block.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'verticalAlignment' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'width' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'allowedBlocks' => array( // obf
        'type' => 'array' // obf
      ), // obf
      'templateLock' => array( // obf
        'type' => array( // obf
          'string', // obf
          'boolean' // obf
        ), // obf
        'enum' => array( // obf
          'all', // obf
          'insert', // obf
          'contentOnly', // obf
          false // obf
        ) // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      '__experimentalOnEnter' => true, // obf
      'anchor' => true, // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'heading' => true, // obf
        'button' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'shadow' => true, // obf
      'spacing' => array( // obf
        'blockGap' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'padding' => true, // obf
          'blockGap' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'style' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'layout' => true, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ) // obf
  ), // obf
  'columns' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/columns', // obf
    'title' => 'Columns', // obf
    'category' => 'design', // obf
    'allowedBlocks' => array( // obf
      'core/column' // obf
    ), // obf
    'description' => 'Display content in multiple columns, with blocks added to each column.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'verticalAlignment' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'isStackedOnMobile' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'templateLock' => array( // obf
        'type' => array( // obf
          'string', // obf
          'boolean' // obf
        ), // obf
        'enum' => array( // obf
          'all', // obf
          'insert', // obf
          'contentOnly', // obf
          false // obf
        ) // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        'heading' => true, // obf
        'button' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'blockGap' => array( // obf
          '__experimentalDefault' => '2em', // obf
          'sides' => array( // obf
            'horizontal', // obf
            'vertical' // obf
          ) // obf
        ), // obf
        'margin' => array( // obf
          'top', // obf
          'bottom' // obf
        ), // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'padding' => true, // obf
          'blockGap' => true // obf
        ) // obf
      ), // obf
      'layout' => array( // obf
        'allowSwitching' => false, // obf
        'allowInheriting' => false, // obf
        'allowEditing' => false, // obf
        'default' => array( // obf
          'type' => 'flex', // obf
          'flexWrap' => 'nowrap' // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'style' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      'shadow' => true // obf
    ), // obf
    'editorStyle' => 'wp-block-columns-editor', // obf
    'style' => 'wp-block-columns' // obf
  ), // obf
  'comment-author-name' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comment-author-name', // obf
    'title' => 'Comment Author Name', // obf
    'category' => 'theme', // obf
    'ancestor' => array( // obf
      'core/comment-template' // obf
    ), // obf
    'description' => 'Displays the name of the author of the comment.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'isLink' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'default' => '_self' // obf
      ), // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'commentId' // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-comment-author-name' // obf
  ), // obf
  'comment-content' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comment-content', // obf
    'title' => 'Comment Content', // obf
    'category' => 'theme', // obf
    'ancestor' => array( // obf
      'core/comment-template' // obf
    ), // obf
    'description' => 'Displays the contents of a comment.', // obf
    'textdomain' => 'default', // obf
    'usesContext' => array( // obf
      'commentId' // obf
    ), // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'padding' => array( // obf
          'horizontal', // obf
          'vertical' // obf
        ), // obf
        '__experimentalDefaultControls' => array( // obf
          'padding' => true // obf
        ) // obf
      ), // obf
      'html' => false // obf
    ), // obf
    'style' => 'wp-block-comment-content' // obf
  ), // obf
  'comment-date' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comment-date', // obf
    'title' => 'Comment Date', // obf
    'category' => 'theme', // obf
    'ancestor' => array( // obf
      'core/comment-template' // obf
    ), // obf
    'description' => 'Displays the date on which the comment was posted.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'format' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'isLink' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'commentId' // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-comment-date' // obf
  ), // obf
  'comment-edit-link' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comment-edit-link', // obf
    'title' => 'Comment Edit Link', // obf
    'category' => 'theme', // obf
    'ancestor' => array( // obf
      'core/comment-template' // obf
    ), // obf
    'description' => 'Displays a link to edit the comment in the WordPress Dashboard. This link is only visible to users with the edit comment capability.', // obf
    'textdomain' => 'default', // obf
    'usesContext' => array( // obf
      'commentId' // obf
    ), // obf
    'attributes' => array( // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'default' => '_self' // obf
      ), // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'color' => array( // obf
        'link' => true, // obf
        'gradients' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-comment-edit-link' // obf
  ), // obf
  'comment-reply-link' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comment-reply-link', // obf
    'title' => 'Comment Reply Link', // obf
    'category' => 'theme', // obf
    'ancestor' => array( // obf
      'core/comment-template' // obf
    ), // obf
    'description' => 'Displays a link to reply to a comment.', // obf
    'textdomain' => 'default', // obf
    'usesContext' => array( // obf
      'commentId' // obf
    ), // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true // obf
      ), // obf
      'html' => false // obf
    ), // obf
    'style' => 'wp-block-comment-reply-link' // obf
  ), // obf
  'comment-template' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comment-template', // obf
    'title' => 'Comment Template', // obf
    'category' => 'design', // obf
    'parent' => array( // obf
      'core/comments' // obf
    ), // obf
    'description' => 'Contains the block elements used to display a comment, like the title, date, author, avatar and more.', // obf
    'textdomain' => 'default', // obf
    'usesContext' => array( // obf
      'postId' // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      'html' => false, // obf
      'reusable' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-comment-template' // obf
  ), // obf
  'comments' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comments', // obf
    'title' => 'Comments', // obf
    'category' => 'theme', // obf
    'description' => 'An advanced block that allows displaying post comments using different visual configurations.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'tagName' => array( // obf
        'type' => 'string', // obf
        'default' => 'div' // obf
      ), // obf
      'legacy' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'heading' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-comments-editor', // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType' // obf
    ) // obf
  ), // obf
  'comments-pagination' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comments-pagination', // obf
    'title' => 'Comments Pagination', // obf
    'category' => 'theme', // obf
    'parent' => array( // obf
      'core/comments' // obf
    ), // obf
    'allowedBlocks' => array( // obf
      'core/comments-pagination-previous', // obf
      'core/comments-pagination-numbers', // obf
      'core/comments-pagination-next' // obf
    ), // obf
    'description' => 'Displays a paginated navigation to next/previous set of comments, when applicable.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'paginationArrow' => array( // obf
        'type' => 'string', // obf
        'default' => 'none' // obf
      ) // obf
    ), // obf
    'example' => array( // obf
      'attributes' => array( // obf
        'paginationArrow' => 'none' // obf
      ) // obf
    ), // obf
    'providesContext' => array( // obf
      'comments/paginationArrow' => 'paginationArrow' // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'layout' => array( // obf
        'allowSwitching' => false, // obf
        'allowInheriting' => false, // obf
        'default' => array( // obf
          'type' => 'flex' // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-comments-pagination-editor', // obf
    'style' => 'wp-block-comments-pagination' // obf
  ), // obf
  'comments-pagination-next' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comments-pagination-next', // obf
    'title' => 'Comments Next Page', // obf
    'category' => 'theme', // obf
    'parent' => array( // obf
      'core/comments-pagination' // obf
    ), // obf
    'description' => 'Displays the next comment\'s page link.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'label' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postId', // obf
      'comments/paginationArrow' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ) // obf
  ), // obf
  'comments-pagination-numbers' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comments-pagination-numbers', // obf
    'title' => 'Comments Page Numbers', // obf
    'category' => 'theme', // obf
    'parent' => array( // obf
      'core/comments-pagination' // obf
    ), // obf
    'description' => 'Displays a list of page numbers for comments pagination.', // obf
    'textdomain' => 'default', // obf
    'usesContext' => array( // obf
      'postId' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ) // obf
  ), // obf
  'comments-pagination-previous' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comments-pagination-previous', // obf
    'title' => 'Comments Previous Page', // obf
    'category' => 'theme', // obf
    'parent' => array( // obf
      'core/comments-pagination' // obf
    ), // obf
    'description' => 'Displays the previous comment\'s page link.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'label' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postId', // obf
      'comments/paginationArrow' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ) // obf
  ), // obf
  'comments-title' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/comments-title', // obf
    'title' => 'Comments Title', // obf
    'category' => 'theme', // obf
    'ancestor' => array( // obf
      'core/comments' // obf
    ), // obf
    'description' => 'Displays a title with the number of comments.', // obf
    'textdomain' => 'default', // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType' // obf
    ), // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'showPostTitle' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'showCommentsCount' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'level' => array( // obf
        'type' => 'number', // obf
        'default' => 2 // obf
      ), // obf
      'levelOptions' => array( // obf
        'type' => 'array' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => false, // obf
      'align' => true, // obf
      'html' => false, // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true, // obf
          '__experimentalFontFamily' => true, // obf
          '__experimentalFontStyle' => true, // obf
          '__experimentalFontWeight' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ) // obf
  ), // obf
  'cover' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/cover', // obf
    'title' => 'Cover', // obf
    'category' => 'media', // obf
    'description' => 'Add an image or video with a text overlay.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'url' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'useFeaturedImage' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'id' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'alt' => array( // obf
        'type' => 'string', // obf
        'default' => '' // obf
      ), // obf
      'hasParallax' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'isRepeated' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'dimRatio' => array( // obf
        'type' => 'number', // obf
        'default' => 100 // obf
      ), // obf
      'overlayColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'customOverlayColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'isUserOverlayColor' => array( // obf
        'type' => 'boolean' // obf
      ), // obf
      'backgroundType' => array( // obf
        'type' => 'string', // obf
        'default' => 'image' // obf
      ), // obf
      'focalPoint' => array( // obf
        'type' => 'object' // obf
      ), // obf
      'minHeight' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'minHeightUnit' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'gradient' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'customGradient' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'contentPosition' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'isDark' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'allowedBlocks' => array( // obf
        'type' => 'array' // obf
      ), // obf
      'templateLock' => array( // obf
        'type' => array( // obf
          'string', // obf
          'boolean' // obf
        ), // obf
        'enum' => array( // obf
          'all', // obf
          'insert', // obf
          'contentOnly', // obf
          false // obf
        ) // obf
      ), // obf
      'tagName' => array( // obf
        'type' => 'string', // obf
        'default' => 'div' // obf
      ), // obf
      'sizeSlug' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType' // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => true, // obf
      'html' => false, // obf
      'shadow' => true, // obf
      'spacing' => array( // obf
        'padding' => true, // obf
        'margin' => array( // obf
          'top', // obf
          'bottom' // obf
        ), // obf
        'blockGap' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'padding' => true, // obf
          'blockGap' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'style' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        '__experimentalDuotone' => '> .wp-block-cover__image-background, > .wp-block-cover__video-background', // obf
        'heading' => true, // obf
        'text' => true, // obf
        'background' => false, // obf
        '__experimentalSkipSerialization' => array( // obf
          'gradients' // obf
        ), // obf
        'enableContrastChecker' => false // obf
      ), // obf
      'dimensions' => array( // obf
        'aspectRatio' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'layout' => array( // obf
        'allowJustification' => false // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-cover-editor', // obf
    'style' => 'wp-block-cover' // obf
  ), // obf
  'details' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/details', // obf
    'title' => 'Details', // obf
    'category' => 'text', // obf
    'description' => 'Hide and show additional content.', // obf
    'keywords' => array( // obf
      'accordion', // obf
      'summary', // obf
      'toggle', // obf
      'disclosure' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'showContent' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'summary' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'summary' // obf
      ), // obf
      'name' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'attribute' => 'name', // obf
        'selector' => '.wp-block-details' // obf
      ), // obf
      'allowedBlocks' => array( // obf
        'type' => 'array' // obf
      ), // obf
      'placeholder' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      '__experimentalOnEnter' => true, // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'anchor' => true, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true // obf
      ), // obf
      'html' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        'blockGap' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'layout' => array( // obf
        'allowEditing' => false // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-details-editor', // obf
    'style' => 'wp-block-details' // obf
  ), // obf
  'embed' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/embed', // obf
    'title' => 'Embed', // obf
    'category' => 'embed', // obf
    'description' => 'Add a block that displays content pulled from other sites, like Twitter or YouTube.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'url' => array( // obf
        'type' => 'string', // obf
        'role' => 'content' // obf
      ), // obf
      'caption' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'figcaption', // obf
        'role' => 'content' // obf
      ), // obf
      'type' => array( // obf
        'type' => 'string', // obf
        'role' => 'content' // obf
      ), // obf
      'providerNameSlug' => array( // obf
        'type' => 'string', // obf
        'role' => 'content' // obf
      ), // obf
      'allowResponsive' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'responsive' => array( // obf
        'type' => 'boolean', // obf
        'default' => false, // obf
        'role' => 'content' // obf
      ), // obf
      'previewable' => array( // obf
        'type' => 'boolean', // obf
        'default' => true, // obf
        'role' => 'content' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      'spacing' => array( // obf
        'margin' => true // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-embed-editor', // obf
    'style' => 'wp-block-embed' // obf
  ), // obf
  'file' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/file', // obf
    'title' => 'File', // obf
    'category' => 'media', // obf
    'description' => 'Add a link to a downloadable file.', // obf
    'keywords' => array( // obf
      'document', // obf
      'pdf', // obf
      'download' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'id' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'blob' => array( // obf
        'type' => 'string', // obf
        'role' => 'local' // obf
      ), // obf
      'href' => array( // obf
        'type' => 'string', // obf
        'role' => 'content' // obf
      ), // obf
      'fileId' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'a:not([download])', // obf
        'attribute' => 'id' // obf
      ), // obf
      'fileName' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'a:not([download])', // obf
        'role' => 'content' // obf
      ), // obf
      'textLinkHref' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'a:not([download])', // obf
        'attribute' => 'href', // obf
        'role' => 'content' // obf
      ), // obf
      'textLinkTarget' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'a:not([download])', // obf
        'attribute' => 'target' // obf
      ), // obf
      'showDownloadButton' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'downloadButtonText' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'a[download]', // obf
        'role' => 'content' // obf
      ), // obf
      'displayPreview' => array( // obf
        'type' => 'boolean' // obf
      ), // obf
      'previewHeight' => array( // obf
        'type' => 'number', // obf
        'default' => 600 // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => true, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ), // obf
      'interactivity' => true // obf
    ), // obf
    'editorStyle' => 'wp-block-file-editor', // obf
    'style' => 'wp-block-file' // obf
  ), // obf
  'footnotes' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/footnotes', // obf
    'title' => 'Footnotes', // obf
    'category' => 'text', // obf
    'description' => 'Display footnotes added to the page.', // obf
    'keywords' => array( // obf
      'references' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType' // obf
    ), // obf
    'supports' => array( // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => false, // obf
          'color' => false, // obf
          'width' => false, // obf
          'style' => false // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'background' => true, // obf
        'link' => true, // obf
        'text' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'link' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'html' => false, // obf
      'multiple' => false, // obf
      'reusable' => false, // obf
      'inserter' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalWritingMode' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-footnotes' // obf
  ), // obf
  'freeform' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/freeform', // obf
    'title' => 'Classic', // obf
    'category' => 'text', // obf
    'description' => 'Use the classic WordPress editor.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'content' => array( // obf
        'type' => 'string', // obf
        'source' => 'raw' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'className' => false, // obf
      'customClassName' => false, // obf
      'reusable' => false // obf
    ), // obf
    'editorStyle' => 'wp-block-freeform-editor' // obf
  ), // obf
  'gallery' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/gallery', // obf
    'title' => 'Gallery', // obf
    'category' => 'media', // obf
    'allowedBlocks' => array( // obf
      'core/image' // obf
    ), // obf
    'description' => 'Display multiple images in a rich gallery.', // obf
    'keywords' => array( // obf
      'images', // obf
      'photos' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'images' => array( // obf
        'type' => 'array', // obf
        'default' => array( // obf
          
        ), // obf
        'source' => 'query', // obf
        'selector' => '.blocks-gallery-item', // obf
        'query' => array( // obf
          'url' => array( // obf
            'type' => 'string', // obf
            'source' => 'attribute', // obf
            'selector' => 'img', // obf
            'attribute' => 'src' // obf
          ), // obf
          'fullUrl' => array( // obf
            'type' => 'string', // obf
            'source' => 'attribute', // obf
            'selector' => 'img', // obf
            'attribute' => 'data-full-url' // obf
          ), // obf
          'link' => array( // obf
            'type' => 'string', // obf
            'source' => 'attribute', // obf
            'selector' => 'img', // obf
            'attribute' => 'data-link' // obf
          ), // obf
          'alt' => array( // obf
            'type' => 'string', // obf
            'source' => 'attribute', // obf
            'selector' => 'img', // obf
            'attribute' => 'alt', // obf
            'default' => '' // obf
          ), // obf
          'id' => array( // obf
            'type' => 'string', // obf
            'source' => 'attribute', // obf
            'selector' => 'img', // obf
            'attribute' => 'data-id' // obf
          ), // obf
          'caption' => array( // obf
            'type' => 'rich-text', // obf
            'source' => 'rich-text', // obf
            'selector' => '.blocks-gallery-item__caption' // obf
          ) // obf
        ) // obf
      ), // obf
      'ids' => array( // obf
        'type' => 'array', // obf
        'items' => array( // obf
          'type' => 'number' // obf
        ), // obf
        'default' => array( // obf
          
        ) // obf
      ), // obf
      'shortCodeTransforms' => array( // obf
        'type' => 'array', // obf
        'items' => array( // obf
          'type' => 'object' // obf
        ), // obf
        'default' => array( // obf
          
        ) // obf
      ), // obf
      'columns' => array( // obf
        'type' => 'number', // obf
        'minimum' => 1, // obf
        'maximum' => 8 // obf
      ), // obf
      'caption' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => '.blocks-gallery-caption' // obf
      ), // obf
      'imageCrop' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'randomOrder' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'fixedHeight' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'linkTo' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'sizeSlug' => array( // obf
        'type' => 'string', // obf
        'default' => 'large' // obf
      ), // obf
      'allowResize' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ) // obf
    ), // obf
    'providesContext' => array( // obf
      'allowResize' => 'allowResize', // obf
      'imageCrop' => 'imageCrop', // obf
      'fixedHeight' => 'fixedHeight' // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => true, // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true // obf
        ) // obf
      ), // obf
      'html' => false, // obf
      'units' => array( // obf
        'px', // obf
        'em', // obf
        'rem', // obf
        'vh', // obf
        'vw' // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        'blockGap' => array( // obf
          'horizontal', // obf
          'vertical' // obf
        ), // obf
        '__experimentalSkipSerialization' => array( // obf
          'blockGap' // obf
        ), // obf
        '__experimentalDefaultControls' => array( // obf
          'blockGap' => true, // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'text' => false, // obf
        'background' => true, // obf
        'gradients' => true // obf
      ), // obf
      'layout' => array( // obf
        'allowSwitching' => false, // obf
        'allowInheriting' => false, // obf
        'allowEditing' => false, // obf
        'default' => array( // obf
          'type' => 'flex' // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-gallery-editor', // obf
    'style' => 'wp-block-gallery' // obf
  ), // obf
  'group' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/group', // obf
    'title' => 'Group', // obf
    'category' => 'design', // obf
    'description' => 'Gather blocks in a layout container.', // obf
    'keywords' => array( // obf
      'container', // obf
      'wrapper', // obf
      'row', // obf
      'section' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'tagName' => array( // obf
        'type' => 'string', // obf
        'default' => 'div' // obf
      ), // obf
      'templateLock' => array( // obf
        'type' => array( // obf
          'string', // obf
          'boolean' // obf
        ), // obf
        'enum' => array( // obf
          'all', // obf
          'insert', // obf
          'contentOnly', // obf
          false // obf
        ) // obf
      ), // obf
      'allowedBlocks' => array( // obf
        'type' => 'array' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      '__experimentalOnEnter' => true, // obf
      '__experimentalOnMerge' => true, // obf
      '__experimentalSettings' => true, // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'anchor' => true, // obf
      'ariaLabel' => true, // obf
      'html' => false, // obf
      'background' => array( // obf
        'backgroundImage' => true, // obf
        'backgroundSize' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'backgroundImage' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'heading' => true, // obf
        'button' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'shadow' => true, // obf
      'spacing' => array( // obf
        'margin' => array( // obf
          'top', // obf
          'bottom' // obf
        ), // obf
        'padding' => true, // obf
        'blockGap' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'padding' => true, // obf
          'blockGap' => true // obf
        ) // obf
      ), // obf
      'dimensions' => array( // obf
        'minHeight' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'style' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'position' => array( // obf
        'sticky' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'layout' => array( // obf
        'allowSizingOnChildren' => true // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-group-editor', // obf
    'style' => 'wp-block-group' // obf
  ), // obf
  'heading' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/heading', // obf
    'title' => 'Heading', // obf
    'category' => 'text', // obf
    'description' => 'Introduce new sections and organize content to help visitors (and search engines) understand the structure of your content.', // obf
    'keywords' => array( // obf
      'title', // obf
      'subtitle' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'content' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'h1,h2,h3,h4,h5,h6', // obf
        'role' => 'content' // obf
      ), // obf
      'level' => array( // obf
        'type' => 'number', // obf
        'default' => 2 // obf
      ), // obf
      'levelOptions' => array( // obf
        'type' => 'array' // obf
      ), // obf
      'placeholder' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'anchor' => true, // obf
      'className' => true, // obf
      'splitting' => true, // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalWritingMode' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__unstablePasteTextInline' => true, // obf
      '__experimentalSlashInserter' => true, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-heading-editor', // obf
    'style' => 'wp-block-heading' // obf
  ), // obf
  'home-link' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/home-link', // obf
    'category' => 'design', // obf
    'parent' => array( // obf
      'core/navigation' // obf
    ), // obf
    'title' => 'Home Link', // obf
    'description' => 'Create a link that always points to the homepage of the site. Usually not necessary if there is already a site title link present in the header.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'label' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'textColor', // obf
      'customTextColor', // obf
      'backgroundColor', // obf
      'customBackgroundColor', // obf
      'fontSize', // obf
      'customFontSize', // obf
      'style' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-home-link-editor', // obf
    'style' => 'wp-block-home-link' // obf
  ), // obf
  'html' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/html', // obf
    'title' => 'Custom HTML', // obf
    'category' => 'widgets', // obf
    'description' => 'Add custom HTML code and preview it as you edit.', // obf
    'keywords' => array( // obf
      'embed' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'content' => array( // obf
        'type' => 'string', // obf
        'source' => 'raw' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'customClassName' => false, // obf
      'className' => false, // obf
      'html' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-html-editor' // obf
  ), // obf
  'image' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/image', // obf
    'title' => 'Image', // obf
    'category' => 'media', // obf
    'usesContext' => array( // obf
      'allowResize', // obf
      'imageCrop', // obf
      'fixedHeight', // obf
      'postId', // obf
      'postType', // obf
      'queryId' // obf
    ), // obf
    'description' => 'Insert an image to make a visual statement.', // obf
    'keywords' => array( // obf
      'img', // obf
      'photo', // obf
      'picture' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'blob' => array( // obf
        'type' => 'string', // obf
        'role' => 'local' // obf
      ), // obf
      'url' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'img', // obf
        'attribute' => 'src', // obf
        'role' => 'content' // obf
      ), // obf
      'alt' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'img', // obf
        'attribute' => 'alt', // obf
        'default' => '', // obf
        'role' => 'content' // obf
      ), // obf
      'caption' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'figcaption', // obf
        'role' => 'content' // obf
      ), // obf
      'lightbox' => array( // obf
        'type' => 'object', // obf
        'enabled' => array( // obf
          'type' => 'boolean' // obf
        ) // obf
      ), // obf
      'title' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'img', // obf
        'attribute' => 'title', // obf
        'role' => 'content' // obf
      ), // obf
      'href' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'figure > a', // obf
        'attribute' => 'href', // obf
        'role' => 'content' // obf
      ), // obf
      'rel' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'figure > a', // obf
        'attribute' => 'rel' // obf
      ), // obf
      'linkClass' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'figure > a', // obf
        'attribute' => 'class' // obf
      ), // obf
      'id' => array( // obf
        'type' => 'number', // obf
        'role' => 'content' // obf
      ), // obf
      'width' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'height' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'aspectRatio' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'scale' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'sizeSlug' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'linkDestination' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'figure > a', // obf
        'attribute' => 'target' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'interactivity' => true, // obf
      'align' => array( // obf
        'left', // obf
        'center', // obf
        'right', // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'anchor' => true, // obf
      'color' => array( // obf
        'text' => false, // obf
        'background' => false // obf
      ), // obf
      'filter' => array( // obf
        'duotone' => true // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'width' => true, // obf
        '__experimentalSkipSerialization' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'shadow' => array( // obf
        '__experimentalSkipSerialization' => true // obf
      ) // obf
    ), // obf
    'selectors' => array( // obf
      'border' => '.wp-block-image img, .wp-block-image .wp-block-image__crop-area, .wp-block-image .components-placeholder', // obf
      'shadow' => '.wp-block-image img, .wp-block-image .wp-block-image__crop-area, .wp-block-image .components-placeholder', // obf
      'filter' => array( // obf
        'duotone' => '.wp-block-image img, .wp-block-image .components-placeholder' // obf
      ) // obf
    ), // obf
    'styles' => array( // obf
      array( // obf
        'name' => 'default', // obf
        'label' => 'Default', // obf
        'isDefault' => true // obf
      ), // obf
      array( // obf
        'name' => 'rounded', // obf
        'label' => 'Rounded' // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-image-editor', // obf
    'style' => 'wp-block-image' // obf
  ), // obf
  'latest-comments' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/latest-comments', // obf
    'title' => 'Latest Comments', // obf
    'category' => 'widgets', // obf
    'description' => 'Display a list of your most recent comments.', // obf
    'keywords' => array( // obf
      'recent comments' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'commentsToShow' => array( // obf
        'type' => 'number', // obf
        'default' => 5, // obf
        'minimum' => 1, // obf
        'maximum' => 100 // obf
      ), // obf
      'displayAvatar' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'displayDate' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'displayExcerpt' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'html' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-latest-comments-editor', // obf
    'style' => 'wp-block-latest-comments' // obf
  ), // obf
  'latest-posts' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/latest-posts', // obf
    'title' => 'Latest Posts', // obf
    'category' => 'widgets', // obf
    'description' => 'Display a list of your most recent posts.', // obf
    'keywords' => array( // obf
      'recent posts' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'categories' => array( // obf
        'type' => 'array', // obf
        'items' => array( // obf
          'type' => 'object' // obf
        ) // obf
      ), // obf
      'selectedAuthor' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'postsToShow' => array( // obf
        'type' => 'number', // obf
        'default' => 5 // obf
      ), // obf
      'displayPostContent' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'displayPostContentRadio' => array( // obf
        'type' => 'string', // obf
        'default' => 'excerpt' // obf
      ), // obf
      'excerptLength' => array( // obf
        'type' => 'number', // obf
        'default' => 55 // obf
      ), // obf
      'displayAuthor' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'displayPostDate' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'postLayout' => array( // obf
        'type' => 'string', // obf
        'default' => 'list' // obf
      ), // obf
      'columns' => array( // obf
        'type' => 'number', // obf
        'default' => 3 // obf
      ), // obf
      'order' => array( // obf
        'type' => 'string', // obf
        'default' => 'desc' // obf
      ), // obf
      'orderBy' => array( // obf
        'type' => 'string', // obf
        'default' => 'date' // obf
      ), // obf
      'displayFeaturedImage' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'featuredImageAlign' => array( // obf
        'type' => 'string', // obf
        'enum' => array( // obf
          'left', // obf
          'center', // obf
          'right' // obf
        ) // obf
      ), // obf
      'featuredImageSizeSlug' => array( // obf
        'type' => 'string', // obf
        'default' => 'thumbnail' // obf
      ), // obf
      'featuredImageSizeWidth' => array( // obf
        'type' => 'number', // obf
        'default' => null // obf
      ), // obf
      'featuredImageSizeHeight' => array( // obf
        'type' => 'number', // obf
        'default' => null // obf
      ), // obf
      'addLinkToFeaturedImage' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-latest-posts-editor', // obf
    'style' => 'wp-block-latest-posts' // obf
  ), // obf
  'legacy-widget' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/legacy-widget', // obf
    'title' => 'Legacy Widget', // obf
    'category' => 'widgets', // obf
    'description' => 'Display a legacy widget.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'id' => array( // obf
        'type' => 'string', // obf
        'default' => null // obf
      ), // obf
      'idBase' => array( // obf
        'type' => 'string', // obf
        'default' => null // obf
      ), // obf
      'instance' => array( // obf
        'type' => 'object', // obf
        'default' => null // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'customClassName' => false, // obf
      'reusable' => false // obf
    ), // obf
    'editorStyle' => 'wp-block-legacy-widget-editor' // obf
  ), // obf
  'list' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/list', // obf
    'title' => 'List', // obf
    'category' => 'text', // obf
    'allowedBlocks' => array( // obf
      'core/list-item' // obf
    ), // obf
    'description' => 'An organized collection of items displayed in a specific order.', // obf
    'keywords' => array( // obf
      'bullet list', // obf
      'ordered list', // obf
      'numbered list' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'ordered' => array( // obf
        'type' => 'boolean', // obf
        'default' => false, // obf
        'role' => 'content' // obf
      ), // obf
      'values' => array( // obf
        'type' => 'string', // obf
        'source' => 'html', // obf
        'selector' => 'ol,ul', // obf
        'multiline' => 'li', // obf
        '__unstableMultilineWrapperTags' => array( // obf
          'ol', // obf
          'ul' // obf
        ), // obf
        'default' => '', // obf
        'role' => 'content' // obf
      ), // obf
      'type' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'start' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'reversed' => array( // obf
        'type' => 'boolean' // obf
      ), // obf
      'placeholder' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'html' => false, // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      '__unstablePasteTextInline' => true, // obf
      '__experimentalOnMerge' => true, // obf
      '__experimentalSlashInserter' => true, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'selectors' => array( // obf
      'border' => '.wp-block-list:not(.wp-block-list .wp-block-list)' // obf
    ), // obf
    'editorStyle' => 'wp-block-list-editor', // obf
    'style' => 'wp-block-list' // obf
  ), // obf
  'list-item' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/list-item', // obf
    'title' => 'List Item', // obf
    'category' => 'text', // obf
    'parent' => array( // obf
      'core/list' // obf
    ), // obf
    'allowedBlocks' => array( // obf
      'core/list' // obf
    ), // obf
    'description' => 'An individual item within a list.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'placeholder' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'content' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'li', // obf
        'role' => 'content' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'className' => false, // obf
      'splitting' => true, // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        'background' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'selectors' => array( // obf
      'root' => '.wp-block-list > li', // obf
      'border' => '.wp-block-list:not(.wp-block-list .wp-block-list) > li' // obf
    ) // obf
  ), // obf
  'loginout' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/loginout', // obf
    'title' => 'Login/out', // obf
    'category' => 'theme', // obf
    'description' => 'Show login & logout links.', // obf
    'keywords' => array( // obf
      'login', // obf
      'logout', // obf
      'form' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'displayLoginAsForm' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'redirectToCurrent' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ) // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 350 // obf
    ), // obf
    'supports' => array( // obf
      'className' => true, // obf
      'color' => array( // obf
        'background' => true, // obf
        'text' => false, // obf
        'gradients' => true, // obf
        'link' => true // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-loginout' // obf
  ), // obf
  'media-text' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/media-text', // obf
    'title' => 'Media & Text', // obf
    'category' => 'media', // obf
    'description' => 'Set media and words side-by-side for a richer layout.', // obf
    'keywords' => array( // obf
      'image', // obf
      'video' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'align' => array( // obf
        'type' => 'string', // obf
        'default' => 'none' // obf
      ), // obf
      'mediaAlt' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'figure img', // obf
        'attribute' => 'alt', // obf
        'default' => '', // obf
        'role' => 'content' // obf
      ), // obf
      'mediaPosition' => array( // obf
        'type' => 'string', // obf
        'default' => 'left' // obf
      ), // obf
      'mediaId' => array( // obf
        'type' => 'number', // obf
        'role' => 'content' // obf
      ), // obf
      'mediaUrl' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'figure video,figure img', // obf
        'attribute' => 'src', // obf
        'role' => 'content' // obf
      ), // obf
      'mediaLink' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'linkDestination' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'figure a', // obf
        'attribute' => 'target' // obf
      ), // obf
      'href' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'figure a', // obf
        'attribute' => 'href', // obf
        'role' => 'content' // obf
      ), // obf
      'rel' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'figure a', // obf
        'attribute' => 'rel' // obf
      ), // obf
      'linkClass' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'figure a', // obf
        'attribute' => 'class' // obf
      ), // obf
      'mediaType' => array( // obf
        'type' => 'string', // obf
        'role' => 'content' // obf
      ), // obf
      'mediaWidth' => array( // obf
        'type' => 'number', // obf
        'default' => 50 // obf
      ), // obf
      'mediaSizeSlug' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'isStackedOnMobile' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'verticalAlignment' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'imageFill' => array( // obf
        'type' => 'boolean' // obf
      ), // obf
      'focalPoint' => array( // obf
        'type' => 'object' // obf
      ), // obf
      'allowedBlocks' => array( // obf
        'type' => 'array' // obf
      ), // obf
      'useFeaturedImage' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType' // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'style' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'heading' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-media-text-editor', // obf
    'style' => 'wp-block-media-text' // obf
  ), // obf
  'missing' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/missing', // obf
    'title' => 'Unsupported', // obf
    'category' => 'text', // obf
    'description' => 'Your site doesn’t include support for this block.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'originalName' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'originalUndelimitedContent' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'originalContent' => array( // obf
        'type' => 'string', // obf
        'source' => 'raw' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'className' => false, // obf
      'customClassName' => false, // obf
      'inserter' => false, // obf
      'html' => false, // obf
      'reusable' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ) // obf
  ), // obf
  'more' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/more', // obf
    'title' => 'More', // obf
    'category' => 'design', // obf
    'description' => 'Content before this block will be shown in the excerpt on your archives page.', // obf
    'keywords' => array( // obf
      'read more' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'customText' => array( // obf
        'type' => 'string', // obf
        'default' => '' // obf
      ), // obf
      'noTeaser' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'customClassName' => false, // obf
      'className' => false, // obf
      'html' => false, // obf
      'multiple' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-more-editor' // obf
  ), // obf
  'navigation' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/navigation', // obf
    'title' => 'Navigation', // obf
    'category' => 'theme', // obf
    'allowedBlocks' => array( // obf
      'core/navigation-link', // obf
      'core/search', // obf
      'core/social-links', // obf
      'core/page-list', // obf
      'core/spacer', // obf
      'core/home-link', // obf
      'core/site-title', // obf
      'core/site-logo', // obf
      'core/navigation-submenu', // obf
      'core/loginout', // obf
      'core/buttons' // obf
    ), // obf
    'description' => 'A collection of blocks that allow visitors to get around your site.', // obf
    'keywords' => array( // obf
      'menu', // obf
      'navigation', // obf
      'links' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'ref' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'textColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'customTextColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'rgbTextColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'backgroundColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'customBackgroundColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'rgbBackgroundColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'showSubmenuIcon' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'openSubmenusOnClick' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'overlayMenu' => array( // obf
        'type' => 'string', // obf
        'default' => 'mobile' // obf
      ), // obf
      'icon' => array( // obf
        'type' => 'string', // obf
        'default' => 'handle' // obf
      ), // obf
      'hasIcon' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      '__unstableLocation' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'overlayBackgroundColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'customOverlayBackgroundColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'overlayTextColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'customOverlayTextColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'maxNestingLevel' => array( // obf
        'type' => 'number', // obf
        'default' => 5 // obf
      ), // obf
      'templateLock' => array( // obf
        'type' => array( // obf
          'string', // obf
          'boolean' // obf
        ), // obf
        'enum' => array( // obf
          'all', // obf
          'insert', // obf
          'contentOnly', // obf
          false // obf
        ) // obf
      ) // obf
    ), // obf
    'providesContext' => array( // obf
      'textColor' => 'textColor', // obf
      'customTextColor' => 'customTextColor', // obf
      'backgroundColor' => 'backgroundColor', // obf
      'customBackgroundColor' => 'customBackgroundColor', // obf
      'overlayTextColor' => 'overlayTextColor', // obf
      'customOverlayTextColor' => 'customOverlayTextColor', // obf
      'overlayBackgroundColor' => 'overlayBackgroundColor', // obf
      'customOverlayBackgroundColor' => 'customOverlayBackgroundColor', // obf
      'fontSize' => 'fontSize', // obf
      'customFontSize' => 'customFontSize', // obf
      'showSubmenuIcon' => 'showSubmenuIcon', // obf
      'openSubmenusOnClick' => 'openSubmenusOnClick', // obf
      'style' => 'style', // obf
      'maxNestingLevel' => 'maxNestingLevel' // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'ariaLabel' => true, // obf
      'html' => false, // obf
      'inserter' => true, // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalSkipSerialization' => array( // obf
          'textDecoration' // obf
        ), // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'blockGap' => true, // obf
        'units' => array( // obf
          'px', // obf
          'em', // obf
          'rem', // obf
          'vh', // obf
          'vw' // obf
        ), // obf
        '__experimentalDefaultControls' => array( // obf
          'blockGap' => true // obf
        ) // obf
      ), // obf
      'layout' => array( // obf
        'allowSwitching' => false, // obf
        'allowInheriting' => false, // obf
        'allowVerticalAlignment' => false, // obf
        'allowSizingOnChildren' => true, // obf
        'default' => array( // obf
          'type' => 'flex' // obf
        ) // obf
      ), // obf
      'interactivity' => true, // obf
      'renaming' => false // obf
    ), // obf
    'editorStyle' => 'wp-block-navigation-editor', // obf
    'style' => 'wp-block-navigation' // obf
  ), // obf
  'navigation-link' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/navigation-link', // obf
    'title' => 'Custom Link', // obf
    'category' => 'design', // obf
    'parent' => array( // obf
      'core/navigation' // obf
    ), // obf
    'allowedBlocks' => array( // obf
      'core/navigation-link', // obf
      'core/navigation-submenu', // obf
      'core/page-list' // obf
    ), // obf
    'description' => 'Add a page, link, or another item to your navigation.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'label' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'type' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'description' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'rel' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'id' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'opensInNewTab' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'url' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'title' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'kind' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'isTopLevelLink' => array( // obf
        'type' => 'boolean' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'textColor', // obf
      'customTextColor', // obf
      'backgroundColor', // obf
      'customBackgroundColor', // obf
      'overlayTextColor', // obf
      'customOverlayTextColor', // obf
      'overlayBackgroundColor', // obf
      'customOverlayBackgroundColor', // obf
      'fontSize', // obf
      'customFontSize', // obf
      'showSubmenuIcon', // obf
      'maxNestingLevel', // obf
      'style' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      '__experimentalSlashInserter' => true, // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'renaming' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-navigation-link-editor', // obf
    'style' => 'wp-block-navigation-link' // obf
  ), // obf
  'navigation-submenu' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/navigation-submenu', // obf
    'title' => 'Submenu', // obf
    'category' => 'design', // obf
    'parent' => array( // obf
      'core/navigation' // obf
    ), // obf
    'description' => 'Add a submenu to your navigation.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'label' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'type' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'description' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'rel' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'id' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'opensInNewTab' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'url' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'title' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'kind' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'isTopLevelItem' => array( // obf
        'type' => 'boolean' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'textColor', // obf
      'customTextColor', // obf
      'backgroundColor', // obf
      'customBackgroundColor', // obf
      'overlayTextColor', // obf
      'customOverlayTextColor', // obf
      'overlayBackgroundColor', // obf
      'customOverlayBackgroundColor', // obf
      'fontSize', // obf
      'customFontSize', // obf
      'showSubmenuIcon', // obf
      'maxNestingLevel', // obf
      'openSubmenusOnClick', // obf
      'style' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-navigation-submenu-editor', // obf
    'style' => 'wp-block-navigation-submenu' // obf
  ), // obf
  'nextpage' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/nextpage', // obf
    'title' => 'Page Break', // obf
    'category' => 'design', // obf
    'description' => 'Separate your content into a multi-page experience.', // obf
    'keywords' => array( // obf
      'next page', // obf
      'pagination' // obf
    ), // obf
    'parent' => array( // obf
      'core/post-content' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'supports' => array( // obf
      'customClassName' => false, // obf
      'className' => false, // obf
      'html' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-nextpage-editor' // obf
  ), // obf
  'page-list' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/page-list', // obf
    'title' => 'Page List', // obf
    'category' => 'widgets', // obf
    'allowedBlocks' => array( // obf
      'core/page-list-item' // obf
    ), // obf
    'description' => 'Display a list of all pages.', // obf
    'keywords' => array( // obf
      'menu', // obf
      'navigation' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'parentPageID' => array( // obf
        'type' => 'integer', // obf
        'default' => 0 // obf
      ), // obf
      'isNested' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'textColor', // obf
      'customTextColor', // obf
      'backgroundColor', // obf
      'customBackgroundColor', // obf
      'overlayTextColor', // obf
      'customOverlayTextColor', // obf
      'overlayBackgroundColor', // obf
      'customOverlayBackgroundColor', // obf
      'fontSize', // obf
      'customFontSize', // obf
      'showSubmenuIcon', // obf
      'style', // obf
      'openSubmenusOnClick' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      'color' => array( // obf
        'text' => true, // obf
        'background' => true, // obf
        'link' => true, // obf
        'gradients' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true // obf
      ), // obf
      'spacing' => array( // obf
        'padding' => true, // obf
        'margin' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'padding' => false, // obf
          'margin' => false // obf
        ) // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-page-list-editor', // obf
    'style' => 'wp-block-page-list' // obf
  ), // obf
  'page-list-item' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/page-list-item', // obf
    'title' => 'Page List Item', // obf
    'category' => 'widgets', // obf
    'parent' => array( // obf
      'core/page-list' // obf
    ), // obf
    'description' => 'Displays a page inside a list of all pages.', // obf
    'keywords' => array( // obf
      'page', // obf
      'menu', // obf
      'navigation' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'id' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'label' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'title' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'link' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'hasChildren' => array( // obf
        'type' => 'boolean' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'textColor', // obf
      'customTextColor', // obf
      'backgroundColor', // obf
      'customBackgroundColor', // obf
      'overlayTextColor', // obf
      'customOverlayTextColor', // obf
      'overlayBackgroundColor', // obf
      'customOverlayBackgroundColor', // obf
      'fontSize', // obf
      'customFontSize', // obf
      'showSubmenuIcon', // obf
      'style', // obf
      'openSubmenusOnClick' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'lock' => false, // obf
      'inserter' => false, // obf
      '__experimentalToolbar' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-page-list-editor', // obf
    'style' => 'wp-block-page-list' // obf
  ), // obf
  'paragraph' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/paragraph', // obf
    'title' => 'Paragraph', // obf
    'category' => 'text', // obf
    'description' => 'Start with the basic building block of all narrative.', // obf
    'keywords' => array( // obf
      'text' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'align' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'content' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'p', // obf
        'role' => 'content' // obf
      ), // obf
      'dropCap' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'placeholder' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'direction' => array( // obf
        'type' => 'string', // obf
        'enum' => array( // obf
          'ltr', // obf
          'rtl' // obf
        ) // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'splitting' => true, // obf
      'anchor' => true, // obf
      'className' => false, // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalWritingMode' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalSelector' => 'p', // obf
      '__unstablePasteTextInline' => true, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-paragraph-editor', // obf
    'style' => 'wp-block-paragraph' // obf
  ), // obf
  'pattern' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/pattern', // obf
    'title' => 'Pattern Placeholder', // obf
    'category' => 'theme', // obf
    'description' => 'Show a block pattern.', // obf
    'supports' => array( // obf
      'html' => false, // obf
      'inserter' => false, // obf
      'renaming' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'slug' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ) // obf
  ), // obf
  'post-author' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-author', // obf
    'title' => 'Author', // obf
    'category' => 'theme', // obf
    'description' => 'Display post author details such as name, avatar, and bio.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'avatarSize' => array( // obf
        'type' => 'number', // obf
        'default' => 48 // obf
      ), // obf
      'showAvatar' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'showBio' => array( // obf
        'type' => 'boolean' // obf
      ), // obf
      'byline' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'isLink' => array( // obf
        'type' => 'boolean', // obf
        'default' => false, // obf
        'role' => 'content' // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'default' => '_self', // obf
        'role' => 'content' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postType', // obf
      'postId', // obf
      'queryId' // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDuotone' => '.wp-block-post-author__avatar img', // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-post-author-editor', // obf
    'style' => 'wp-block-post-author' // obf
  ), // obf
  'post-author-biography' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-author-biography', // obf
    'title' => 'Author Biography', // obf
    'category' => 'theme', // obf
    'description' => 'The author biography.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postType', // obf
      'postId' // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 350 // obf
    ), // obf
    'supports' => array( // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-post-author-biography' // obf
  ), // obf
  'post-author-name' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-author-name', // obf
    'title' => 'Author Name', // obf
    'category' => 'theme', // obf
    'description' => 'The author name.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'isLink' => array( // obf
        'type' => 'boolean', // obf
        'default' => false, // obf
        'role' => 'content' // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'default' => '_self', // obf
        'role' => 'content' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postType', // obf
      'postId' // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 350 // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-post-author-name' // obf
  ), // obf
  'post-comments-form' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-comments-form', // obf
    'title' => 'Comments Form', // obf
    'category' => 'theme', // obf
    'description' => 'Display a post\'s comments form.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType' // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'heading' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-post-comments-form-editor', // obf
    'style' => array( // obf
      'wp-block-post-comments-form', // obf
      'wp-block-buttons', // obf
      'wp-block-button' // obf
    ), // obf
    'example' => array( // obf
      'attributes' => array( // obf
        'textAlign' => 'center' // obf
      ) // obf
    ) // obf
  ), // obf
  'post-content' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-content', // obf
    'title' => 'Content', // obf
    'category' => 'theme', // obf
    'description' => 'Displays the contents of a post or page.', // obf
    'textdomain' => 'default', // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType', // obf
      'queryId' // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 350 // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      'layout' => true, // obf
      'background' => array( // obf
        'backgroundImage' => true, // obf
        'backgroundSize' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'backgroundImage' => true // obf
        ) // obf
      ), // obf
      'dimensions' => array( // obf
        'minHeight' => true // obf
      ), // obf
      'spacing' => array( // obf
        'blockGap' => true, // obf
        'padding' => true, // obf
        'margin' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'heading' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => false, // obf
          'text' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-post-content', // obf
    'editorStyle' => 'wp-block-post-content-editor' // obf
  ), // obf
  'post-date' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-date', // obf
    'title' => 'Date', // obf
    'category' => 'theme', // obf
    'description' => 'Display the publish date for an entry such as a post or page.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'format' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'isLink' => array( // obf
        'type' => 'boolean', // obf
        'default' => false, // obf
        'role' => 'content' // obf
      ), // obf
      'displayType' => array( // obf
        'type' => 'string', // obf
        'default' => 'date' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType', // obf
      'queryId' // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 350 // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ) // obf
  ), // obf
  'post-excerpt' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-excerpt', // obf
    'title' => 'Excerpt', // obf
    'category' => 'theme', // obf
    'description' => 'Display the excerpt.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'moreText' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'showMoreOnNewLine' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'excerptLength' => array( // obf
        'type' => 'number', // obf
        'default' => 55 // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType', // obf
      'queryId' // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 350 // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-post-excerpt-editor', // obf
    'style' => 'wp-block-post-excerpt' // obf
  ), // obf
  'post-featured-image' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-featured-image', // obf
    'title' => 'Featured Image', // obf
    'category' => 'theme', // obf
    'description' => 'Display a post\'s featured image.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'isLink' => array( // obf
        'type' => 'boolean', // obf
        'default' => false, // obf
        'role' => 'content' // obf
      ), // obf
      'aspectRatio' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'width' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'height' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'scale' => array( // obf
        'type' => 'string', // obf
        'default' => 'cover' // obf
      ), // obf
      'sizeSlug' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'rel' => array( // obf
        'type' => 'string', // obf
        'attribute' => 'rel', // obf
        'default' => '', // obf
        'role' => 'content' // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'default' => '_self', // obf
        'role' => 'content' // obf
      ), // obf
      'overlayColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'customOverlayColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'dimRatio' => array( // obf
        'type' => 'number', // obf
        'default' => 0 // obf
      ), // obf
      'gradient' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'customGradient' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'useFirstImageFromPost' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType', // obf
      'queryId' // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 350 // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'left', // obf
        'right', // obf
        'center', // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'color' => array( // obf
        'text' => false, // obf
        'background' => false // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'width' => true, // obf
        '__experimentalSkipSerialization' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'filter' => array( // obf
        'duotone' => true // obf
      ), // obf
      'shadow' => array( // obf
        '__experimentalSkipSerialization' => true // obf
      ), // obf
      'html' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'selectors' => array( // obf
      'border' => '.wp-block-post-featured-image img, .wp-block-post-featured-image .block-editor-media-placeholder, .wp-block-post-featured-image .wp-block-post-featured-image__overlay', // obf
      'shadow' => '.wp-block-post-featured-image img, .wp-block-post-featured-image .components-placeholder', // obf
      'filter' => array( // obf
        'duotone' => '.wp-block-post-featured-image img, .wp-block-post-featured-image .wp-block-post-featured-image__placeholder, .wp-block-post-featured-image .components-placeholder__illustration, .wp-block-post-featured-image .components-placeholder::before' // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-post-featured-image-editor', // obf
    'style' => 'wp-block-post-featured-image' // obf
  ), // obf
  'post-navigation-link' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-navigation-link', // obf
    'title' => 'Post Navigation Link', // obf
    'category' => 'theme', // obf
    'description' => 'Displays the next or previous post link that is adjacent to the current post.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'type' => array( // obf
        'type' => 'string', // obf
        'default' => 'next' // obf
      ), // obf
      'label' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'showTitle' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'linkLabel' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'arrow' => array( // obf
        'type' => 'string', // obf
        'default' => 'none' // obf
      ), // obf
      'taxonomy' => array( // obf
        'type' => 'string', // obf
        'default' => '' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postType' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'color' => array( // obf
        'link' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalWritingMode' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-post-navigation-link' // obf
  ), // obf
  'post-template' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-template', // obf
    'title' => 'Post Template', // obf
    'category' => 'theme', // obf
    'ancestor' => array( // obf
      'core/query' // obf
    ), // obf
    'description' => 'Contains the block elements used to render a post, like the title, date, featured image, content or excerpt, and more.', // obf
    'textdomain' => 'default', // obf
    'usesContext' => array( // obf
      'queryId', // obf
      'query', // obf
      'displayLayout', // obf
      'templateSlug', // obf
      'previewPostType', // obf
      'enhancedPagination', // obf
      'postType' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'layout' => true, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        'blockGap' => array( // obf
          '__experimentalDefault' => '1.25em' // obf
        ), // obf
        '__experimentalDefaultControls' => array( // obf
          'blockGap' => true, // obf
          'padding' => false, // obf
          'margin' => false // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-post-template', // obf
    'editorStyle' => 'wp-block-post-template-editor' // obf
  ), // obf
  'post-terms' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-terms', // obf
    'title' => 'Post Terms', // obf
    'category' => 'theme', // obf
    'description' => 'Post terms.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'term' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'separator' => array( // obf
        'type' => 'string', // obf
        'default' => ', ' // obf
      ), // obf
      'prefix' => array( // obf
        'type' => 'string', // obf
        'default' => '' // obf
      ), // obf
      'suffix' => array( // obf
        'type' => 'string', // obf
        'default' => '' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType' // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 350 // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-post-terms' // obf
  ), // obf
  'post-title' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/post-title', // obf
    'title' => 'Title', // obf
    'category' => 'theme', // obf
    'description' => 'Displays the title of a post, page, or any other content-type.', // obf
    'textdomain' => 'default', // obf
    'usesContext' => array( // obf
      'postId', // obf
      'postType', // obf
      'queryId' // obf
    ), // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'level' => array( // obf
        'type' => 'number', // obf
        'default' => 2 // obf
      ), // obf
      'levelOptions' => array( // obf
        'type' => 'array' // obf
      ), // obf
      'isLink' => array( // obf
        'type' => 'boolean', // obf
        'default' => false, // obf
        'role' => 'content' // obf
      ), // obf
      'rel' => array( // obf
        'type' => 'string', // obf
        'attribute' => 'rel', // obf
        'default' => '', // obf
        'role' => 'content' // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'default' => '_self', // obf
        'role' => 'content' // obf
      ) // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 350 // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-post-title' // obf
  ), // obf
  'preformatted' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/preformatted', // obf
    'title' => 'Preformatted', // obf
    'category' => 'text', // obf
    'description' => 'Add text that respects your spacing and tabs, and also allows styling.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'content' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'pre', // obf
        '__unstablePreserveWhiteSpace' => true, // obf
        'role' => 'content' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'padding' => true, // obf
        'margin' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-preformatted' // obf
  ), // obf
  'pullquote' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/pullquote', // obf
    'title' => 'Pullquote', // obf
    'category' => 'text', // obf
    'description' => 'Give special visual emphasis to a quote from your text.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'value' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'p', // obf
        'role' => 'content' // obf
      ), // obf
      'citation' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'cite', // obf
        'role' => 'content' // obf
      ), // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => array( // obf
        'left', // obf
        'right', // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'background' => array( // obf
        'backgroundImage' => true, // obf
        'backgroundSize' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'backgroundImage' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'background' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'dimensions' => array( // obf
        'minHeight' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'minHeight' => false // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'style' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      '__experimentalStyle' => array( // obf
        'typography' => array( // obf
          'fontSize' => '1.5em', // obf
          'lineHeight' => '1.6' // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-pullquote-editor', // obf
    'style' => 'wp-block-pullquote' // obf
  ), // obf
  'query' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/query', // obf
    'title' => 'Query Loop', // obf
    'category' => 'theme', // obf
    'description' => 'An advanced block that allows displaying post types based on different query parameters and visual configurations.', // obf
    'keywords' => array( // obf
      'posts', // obf
      'list', // obf
      'blog', // obf
      'blogs', // obf
      'custom post types' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'queryId' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'query' => array( // obf
        'type' => 'object', // obf
        'default' => array( // obf
          'perPage' => null, // obf
          'pages' => 0, // obf
          'offset' => 0, // obf
          'postType' => 'post', // obf
          'order' => 'desc', // obf
          'orderBy' => 'date', // obf
          'author' => '', // obf
          'search' => '', // obf
          'exclude' => array( // obf
            
          ), // obf
          'sticky' => '', // obf
          'inherit' => true, // obf
          'taxQuery' => null, // obf
          'parents' => array( // obf
            
          ), // obf
          'format' => array( // obf
            
          ) // obf
        ) // obf
      ), // obf
      'tagName' => array( // obf
        'type' => 'string', // obf
        'default' => 'div' // obf
      ), // obf
      'namespace' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'enhancedPagination' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'templateSlug' // obf
    ), // obf
    'providesContext' => array( // obf
      'queryId' => 'queryId', // obf
      'query' => 'query', // obf
      'displayLayout' => 'displayLayout', // obf
      'enhancedPagination' => 'enhancedPagination' // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      'layout' => true, // obf
      'interactivity' => true // obf
    ), // obf
    'editorStyle' => 'wp-block-query-editor' // obf
  ), // obf
  'query-no-results' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/query-no-results', // obf
    'title' => 'No Results', // obf
    'category' => 'theme', // obf
    'description' => 'Contains the block elements used to render content when no query results are found.', // obf
    'ancestor' => array( // obf
      'core/query' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'usesContext' => array( // obf
      'queryId', // obf
      'query' // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ) // obf
  ), // obf
  'query-pagination' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/query-pagination', // obf
    'title' => 'Pagination', // obf
    'category' => 'theme', // obf
    'ancestor' => array( // obf
      'core/query' // obf
    ), // obf
    'allowedBlocks' => array( // obf
      'core/query-pagination-previous', // obf
      'core/query-pagination-numbers', // obf
      'core/query-pagination-next' // obf
    ), // obf
    'description' => 'Displays a paginated navigation to next/previous set of posts, when applicable.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'paginationArrow' => array( // obf
        'type' => 'string', // obf
        'default' => 'none' // obf
      ), // obf
      'showLabel' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'queryId', // obf
      'query' // obf
    ), // obf
    'providesContext' => array( // obf
      'paginationArrow' => 'paginationArrow', // obf
      'showLabel' => 'showLabel' // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'layout' => array( // obf
        'allowSwitching' => false, // obf
        'allowInheriting' => false, // obf
        'default' => array( // obf
          'type' => 'flex' // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-query-pagination-editor', // obf
    'style' => 'wp-block-query-pagination' // obf
  ), // obf
  'query-pagination-next' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/query-pagination-next', // obf
    'title' => 'Next Page', // obf
    'category' => 'theme', // obf
    'parent' => array( // obf
      'core/query-pagination' // obf
    ), // obf
    'description' => 'Displays the next posts page link.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'label' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'queryId', // obf
      'query', // obf
      'paginationArrow', // obf
      'showLabel', // obf
      'enhancedPagination' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ) // obf
  ), // obf
  'query-pagination-numbers' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/query-pagination-numbers', // obf
    'title' => 'Page Numbers', // obf
    'category' => 'theme', // obf
    'parent' => array( // obf
      'core/query-pagination' // obf
    ), // obf
    'description' => 'Displays a list of page numbers for pagination.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'midSize' => array( // obf
        'type' => 'number', // obf
        'default' => 2 // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'queryId', // obf
      'query', // obf
      'enhancedPagination' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-query-pagination-numbers-editor' // obf
  ), // obf
  'query-pagination-previous' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/query-pagination-previous', // obf
    'title' => 'Previous Page', // obf
    'category' => 'theme', // obf
    'parent' => array( // obf
      'core/query-pagination' // obf
    ), // obf
    'description' => 'Displays the previous posts page link.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'label' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'queryId', // obf
      'query', // obf
      'paginationArrow', // obf
      'showLabel', // obf
      'enhancedPagination' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ) // obf
  ), // obf
  'query-title' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/query-title', // obf
    'title' => 'Query Title', // obf
    'category' => 'theme', // obf
    'description' => 'Display the query title.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'type' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'level' => array( // obf
        'type' => 'number', // obf
        'default' => 1 // obf
      ), // obf
      'levelOptions' => array( // obf
        'type' => 'array' // obf
      ), // obf
      'showPrefix' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'showSearchTerm' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ) // obf
    ), // obf
    'example' => array( // obf
      'attributes' => array( // obf
        'type' => 'search' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-query-title' // obf
  ), // obf
  'query-total' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/query-total', // obf
    'title' => 'Query Total', // obf
    'category' => 'theme', // obf
    'ancestor' => array( // obf
      'core/query' // obf
    ), // obf
    'description' => 'Display the total number of results in a query.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'displayType' => array( // obf
        'type' => 'string', // obf
        'default' => 'total-results' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'queryId', // obf
      'query' // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-query-total' // obf
  ), // obf
  'quote' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/quote', // obf
    'title' => 'Quote', // obf
    'category' => 'text', // obf
    'description' => 'Give quoted text visual emphasis. "In quoting others, we cite ourselves." — Julio Cortázar', // obf
    'keywords' => array( // obf
      'blockquote', // obf
      'cite' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'value' => array( // obf
        'type' => 'string', // obf
        'source' => 'html', // obf
        'selector' => 'blockquote', // obf
        'multiline' => 'p', // obf
        'default' => '', // obf
        'role' => 'content' // obf
      ), // obf
      'citation' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'cite', // obf
        'role' => 'content' // obf
      ), // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => array( // obf
        'left', // obf
        'right', // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      'background' => array( // obf
        'backgroundImage' => true, // obf
        'backgroundSize' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'backgroundImage' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'style' => true, // obf
        'width' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'style' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'dimensions' => array( // obf
        'minHeight' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'minHeight' => false // obf
        ) // obf
      ), // obf
      '__experimentalOnEnter' => true, // obf
      '__experimentalOnMerge' => true, // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'heading' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'layout' => array( // obf
        'allowEditing' => false // obf
      ), // obf
      'spacing' => array( // obf
        'blockGap' => true, // obf
        'padding' => true, // obf
        'margin' => true // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'styles' => array( // obf
      array( // obf
        'name' => 'default', // obf
        'label' => 'Default', // obf
        'isDefault' => true // obf
      ), // obf
      array( // obf
        'name' => 'plain', // obf
        'label' => 'Plain' // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-quote-editor', // obf
    'style' => 'wp-block-quote' // obf
  ), // obf
  'read-more' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/read-more', // obf
    'title' => 'Read More', // obf
    'category' => 'theme', // obf
    'description' => 'Displays the link of a post, page, or any other content-type.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'content' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'default' => '_self' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'postId' // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'text' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true, // obf
          'textDecoration' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => array( // obf
          'top', // obf
          'bottom' // obf
        ), // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'padding' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'width' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-read-more' // obf
  ), // obf
  'rss' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/rss', // obf
    'title' => 'RSS', // obf
    'category' => 'widgets', // obf
    'description' => 'Display entries from any RSS or Atom feed.', // obf
    'keywords' => array( // obf
      'atom', // obf
      'feed' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'columns' => array( // obf
        'type' => 'number', // obf
        'default' => 2 // obf
      ), // obf
      'blockLayout' => array( // obf
        'type' => 'string', // obf
        'default' => 'list' // obf
      ), // obf
      'feedURL' => array( // obf
        'type' => 'string', // obf
        'default' => '' // obf
      ), // obf
      'itemsToShow' => array( // obf
        'type' => 'number', // obf
        'default' => 5 // obf
      ), // obf
      'displayExcerpt' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'displayAuthor' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'displayDate' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'excerptLength' => array( // obf
        'type' => 'number', // obf
        'default' => 55 // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      'html' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'padding' => false, // obf
          'margin' => false // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'background' => true, // obf
        'text' => true, // obf
        'gradients' => true, // obf
        'link' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-rss-editor', // obf
    'style' => 'wp-block-rss' // obf
  ), // obf
  'search' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/search', // obf
    'title' => 'Search', // obf
    'category' => 'widgets', // obf
    'description' => 'Help visitors find your content.', // obf
    'keywords' => array( // obf
      'find' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'label' => array( // obf
        'type' => 'string', // obf
        'role' => 'content' // obf
      ), // obf
      'showLabel' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'placeholder' => array( // obf
        'type' => 'string', // obf
        'default' => '', // obf
        'role' => 'content' // obf
      ), // obf
      'width' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'widthUnit' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'buttonText' => array( // obf
        'type' => 'string', // obf
        'role' => 'content' // obf
      ), // obf
      'buttonPosition' => array( // obf
        'type' => 'string', // obf
        'default' => 'button-outside' // obf
      ), // obf
      'buttonUseIcon' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'query' => array( // obf
        'type' => 'object', // obf
        'default' => array( // obf
          
        ) // obf
      ), // obf
      'isSearchFieldHidden' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'left', // obf
        'center', // obf
        'right' // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        '__experimentalSkipSerialization' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'interactivity' => true, // obf
      'typography' => array( // obf
        '__experimentalSkipSerialization' => true, // obf
        '__experimentalSelector' => '.wp-block-search__label, .wp-block-search__input, .wp-block-search__button', // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'color' => true, // obf
        'radius' => true, // obf
        'width' => true, // obf
        '__experimentalSkipSerialization' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'radius' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true // obf
      ), // obf
      'html' => false // obf
    ), // obf
    'editorStyle' => 'wp-block-search-editor', // obf
    'style' => 'wp-block-search' // obf
  ), // obf
  'separator' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/separator', // obf
    'title' => 'Separator', // obf
    'category' => 'design', // obf
    'description' => 'Create a break between ideas or sections with a horizontal separator.', // obf
    'keywords' => array( // obf
      'horizontal-line', // obf
      'hr', // obf
      'divider' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'opacity' => array( // obf
        'type' => 'string', // obf
        'default' => 'alpha-channel' // obf
      ), // obf
      'tagName' => array( // obf
        'type' => 'string', // obf
        'enum' => array( // obf
          'hr', // obf
          'div' // obf
        ), // obf
        'default' => 'hr' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => array( // obf
        'center', // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'color' => array( // obf
        'enableContrastChecker' => false, // obf
        '__experimentalSkipSerialization' => true, // obf
        'gradients' => true, // obf
        'background' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => array( // obf
          'top', // obf
          'bottom' // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'styles' => array( // obf
      array( // obf
        'name' => 'default', // obf
        'label' => 'Default', // obf
        'isDefault' => true // obf
      ), // obf
      array( // obf
        'name' => 'wide', // obf
        'label' => 'Wide Line' // obf
      ), // obf
      array( // obf
        'name' => 'dots', // obf
        'label' => 'Dots' // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-separator-editor', // obf
    'style' => 'wp-block-separator' // obf
  ), // obf
  'shortcode' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/shortcode', // obf
    'title' => 'Shortcode', // obf
    'category' => 'widgets', // obf
    'description' => 'Insert additional custom elements with a WordPress shortcode.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'text' => array( // obf
        'type' => 'string', // obf
        'source' => 'raw' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'className' => false, // obf
      'customClassName' => false, // obf
      'html' => false // obf
    ), // obf
    'editorStyle' => 'wp-block-shortcode-editor' // obf
  ), // obf
  'site-logo' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/site-logo', // obf
    'title' => 'Site Logo', // obf
    'category' => 'theme', // obf
    'description' => 'Display an image to represent this site. Update this block and the changes apply everywhere.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'width' => array( // obf
        'type' => 'number' // obf
      ), // obf
      'isLink' => array( // obf
        'type' => 'boolean', // obf
        'default' => true, // obf
        'role' => 'content' // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'default' => '_self', // obf
        'role' => 'content' // obf
      ), // obf
      'shouldSyncIcon' => array( // obf
        'type' => 'boolean' // obf
      ) // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 500, // obf
      'attributes' => array( // obf
        'width' => 350, // obf
        'className' => 'block-editor-block-types-list__site-logo-example' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'align' => true, // obf
      'alignWide' => false, // obf
      'color' => array( // obf
        '__experimentalDuotone' => 'img, .components-placeholder__illustration, .components-placeholder::before', // obf
        'text' => false, // obf
        'background' => false // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'styles' => array( // obf
      array( // obf
        'name' => 'default', // obf
        'label' => 'Default', // obf
        'isDefault' => true // obf
      ), // obf
      array( // obf
        'name' => 'rounded', // obf
        'label' => 'Rounded' // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-site-logo-editor', // obf
    'style' => 'wp-block-site-logo' // obf
  ), // obf
  'site-tagline' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/site-tagline', // obf
    'title' => 'Site Tagline', // obf
    'category' => 'theme', // obf
    'description' => 'Describe in a few words what the site is about. The tagline can be used in search results or when sharing on social networks even if it’s not displayed in the theme design.', // obf
    'keywords' => array( // obf
      'description' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'level' => array( // obf
        'type' => 'number', // obf
        'default' => 0 // obf
      ), // obf
      'levelOptions' => array( // obf
        'type' => 'array', // obf
        'default' => array( // obf
          0, // obf
          1, // obf
          2, // obf
          3, // obf
          4, // obf
          5, // obf
          6 // obf
        ) // obf
      ) // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 350, // obf
      'attributes' => array( // obf
        'textAlign' => 'center' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalWritingMode' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-site-tagline-editor', // obf
    'style' => 'wp-block-site-tagline' // obf
  ), // obf
  'site-title' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/site-title', // obf
    'title' => 'Site Title', // obf
    'category' => 'theme', // obf
    'description' => 'Displays the name of this site. Update the block, and the changes apply everywhere it’s used. This will also appear in the browser title bar and in search results.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'level' => array( // obf
        'type' => 'number', // obf
        'default' => 1 // obf
      ), // obf
      'levelOptions' => array( // obf
        'type' => 'array', // obf
        'default' => array( // obf
          0, // obf
          1, // obf
          2, // obf
          3, // obf
          4, // obf
          5, // obf
          6 // obf
        ) // obf
      ), // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'isLink' => array( // obf
        'type' => 'boolean', // obf
        'default' => true, // obf
        'role' => 'content' // obf
      ), // obf
      'linkTarget' => array( // obf
        'type' => 'string', // obf
        'default' => '_self', // obf
        'role' => 'content' // obf
      ) // obf
    ), // obf
    'example' => array( // obf
      'viewportWidth' => 500 // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true, // obf
          'link' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'padding' => true, // obf
        'margin' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalWritingMode' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-site-title-editor', // obf
    'style' => 'wp-block-site-title' // obf
  ), // obf
  'social-link' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/social-link', // obf
    'title' => 'Social Icon', // obf
    'category' => 'widgets', // obf
    'parent' => array( // obf
      'core/social-links' // obf
    ), // obf
    'description' => 'Display an icon linking to a social profile or site.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'url' => array( // obf
        'type' => 'string', // obf
        'role' => 'content' // obf
      ), // obf
      'service' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'label' => array( // obf
        'type' => 'string', // obf
        'role' => 'content' // obf
      ), // obf
      'rel' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'openInNewTab', // obf
      'showLabels', // obf
      'iconColor', // obf
      'iconColorValue', // obf
      'iconBackgroundColor', // obf
      'iconBackgroundColorValue' // obf
    ), // obf
    'supports' => array( // obf
      'reusable' => false, // obf
      'html' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-social-link-editor' // obf
  ), // obf
  'social-links' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/social-links', // obf
    'title' => 'Social Icons', // obf
    'category' => 'widgets', // obf
    'allowedBlocks' => array( // obf
      'core/social-link' // obf
    ), // obf
    'description' => 'Display icons linking to your social profiles or sites.', // obf
    'keywords' => array( // obf
      'links' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'iconColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'customIconColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'iconColorValue' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'iconBackgroundColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'customIconBackgroundColor' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'iconBackgroundColorValue' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'openInNewTab' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'showLabels' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'size' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'providesContext' => array( // obf
      'openInNewTab' => 'openInNewTab', // obf
      'showLabels' => 'showLabels', // obf
      'iconColor' => 'iconColor', // obf
      'iconColorValue' => 'iconColorValue', // obf
      'iconBackgroundColor' => 'iconBackgroundColor', // obf
      'iconBackgroundColorValue' => 'iconBackgroundColorValue' // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'left', // obf
        'center', // obf
        'right' // obf
      ), // obf
      'anchor' => true, // obf
      '__experimentalExposeControlsToChildren' => true, // obf
      'layout' => array( // obf
        'allowSwitching' => false, // obf
        'allowInheriting' => false, // obf
        'allowVerticalAlignment' => false, // obf
        'default' => array( // obf
          'type' => 'flex' // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'enableContrastChecker' => false, // obf
        'background' => true, // obf
        'gradients' => true, // obf
        'text' => false, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => false // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'blockGap' => array( // obf
          'horizontal', // obf
          'vertical' // obf
        ), // obf
        'margin' => true, // obf
        'padding' => true, // obf
        'units' => array( // obf
          'px', // obf
          'em', // obf
          'rem', // obf
          'vh', // obf
          'vw' // obf
        ), // obf
        '__experimentalDefaultControls' => array( // obf
          'blockGap' => true, // obf
          'margin' => true, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'styles' => array( // obf
      array( // obf
        'name' => 'default', // obf
        'label' => 'Default', // obf
        'isDefault' => true // obf
      ), // obf
      array( // obf
        'name' => 'logos-only', // obf
        'label' => 'Logos Only' // obf
      ), // obf
      array( // obf
        'name' => 'pill-shape', // obf
        'label' => 'Pill Shape' // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-social-links-editor', // obf
    'style' => 'wp-block-social-links' // obf
  ), // obf
  'spacer' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/spacer', // obf
    'title' => 'Spacer', // obf
    'category' => 'design', // obf
    'description' => 'Add white space between blocks and customize its height.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'height' => array( // obf
        'type' => 'string', // obf
        'default' => '100px' // obf
      ), // obf
      'width' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'usesContext' => array( // obf
      'orientation' // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'spacing' => array( // obf
        'margin' => array( // obf
          'top', // obf
          'bottom' // obf
        ), // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-spacer-editor', // obf
    'style' => 'wp-block-spacer' // obf
  ), // obf
  'table' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/table', // obf
    'title' => 'Table', // obf
    'category' => 'text', // obf
    'description' => 'Create structured content in rows and columns to display information.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'hasFixedLayout' => array( // obf
        'type' => 'boolean', // obf
        'default' => true // obf
      ), // obf
      'caption' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'figcaption' // obf
      ), // obf
      'head' => array( // obf
        'type' => 'array', // obf
        'default' => array( // obf
          
        ), // obf
        'source' => 'query', // obf
        'selector' => 'thead tr', // obf
        'query' => array( // obf
          'cells' => array( // obf
            'type' => 'array', // obf
            'default' => array( // obf
              
            ), // obf
            'source' => 'query', // obf
            'selector' => 'td,th', // obf
            'query' => array( // obf
              'content' => array( // obf
                'type' => 'rich-text', // obf
                'source' => 'rich-text' // obf
              ), // obf
              'tag' => array( // obf
                'type' => 'string', // obf
                'default' => 'td', // obf
                'source' => 'tag' // obf
              ), // obf
              'scope' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'scope' // obf
              ), // obf
              'align' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'data-align' // obf
              ), // obf
              'colspan' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'colspan' // obf
              ), // obf
              'rowspan' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'rowspan' // obf
              ) // obf
            ) // obf
          ) // obf
        ) // obf
      ), // obf
      'body' => array( // obf
        'type' => 'array', // obf
        'default' => array( // obf
          
        ), // obf
        'source' => 'query', // obf
        'selector' => 'tbody tr', // obf
        'query' => array( // obf
          'cells' => array( // obf
            'type' => 'array', // obf
            'default' => array( // obf
              
            ), // obf
            'source' => 'query', // obf
            'selector' => 'td,th', // obf
            'query' => array( // obf
              'content' => array( // obf
                'type' => 'rich-text', // obf
                'source' => 'rich-text' // obf
              ), // obf
              'tag' => array( // obf
                'type' => 'string', // obf
                'default' => 'td', // obf
                'source' => 'tag' // obf
              ), // obf
              'scope' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'scope' // obf
              ), // obf
              'align' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'data-align' // obf
              ), // obf
              'colspan' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'colspan' // obf
              ), // obf
              'rowspan' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'rowspan' // obf
              ) // obf
            ) // obf
          ) // obf
        ) // obf
      ), // obf
      'foot' => array( // obf
        'type' => 'array', // obf
        'default' => array( // obf
          
        ), // obf
        'source' => 'query', // obf
        'selector' => 'tfoot tr', // obf
        'query' => array( // obf
          'cells' => array( // obf
            'type' => 'array', // obf
            'default' => array( // obf
              
            ), // obf
            'source' => 'query', // obf
            'selector' => 'td,th', // obf
            'query' => array( // obf
              'content' => array( // obf
                'type' => 'rich-text', // obf
                'source' => 'rich-text' // obf
              ), // obf
              'tag' => array( // obf
                'type' => 'string', // obf
                'default' => 'td', // obf
                'source' => 'tag' // obf
              ), // obf
              'scope' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'scope' // obf
              ), // obf
              'align' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'data-align' // obf
              ), // obf
              'colspan' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'colspan' // obf
              ), // obf
              'rowspan' => array( // obf
                'type' => 'string', // obf
                'source' => 'attribute', // obf
                'attribute' => 'rowspan' // obf
              ) // obf
            ) // obf
          ) // obf
        ) // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => true, // obf
      'color' => array( // obf
        '__experimentalSkipSerialization' => true, // obf
        'gradients' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        '__experimentalSkipSerialization' => true, // obf
        'color' => true, // obf
        'style' => true, // obf
        'width' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'color' => true, // obf
          'style' => true, // obf
          'width' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'selectors' => array( // obf
      'root' => '.wp-block-table > table', // obf
      'spacing' => '.wp-block-table' // obf
    ), // obf
    'styles' => array( // obf
      array( // obf
        'name' => 'regular', // obf
        'label' => 'Default', // obf
        'isDefault' => true // obf
      ), // obf
      array( // obf
        'name' => 'stripes', // obf
        'label' => 'Stripes' // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-table-editor', // obf
    'style' => 'wp-block-table' // obf
  ), // obf
  'tag-cloud' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/tag-cloud', // obf
    'title' => 'Tag Cloud', // obf
    'category' => 'widgets', // obf
    'description' => 'A cloud of popular keywords, each sized by how often it appears.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'numberOfTags' => array( // obf
        'type' => 'number', // obf
        'default' => 45, // obf
        'minimum' => 1, // obf
        'maximum' => 100 // obf
      ), // obf
      'taxonomy' => array( // obf
        'type' => 'string', // obf
        'default' => 'post_tag' // obf
      ), // obf
      'showTagCounts' => array( // obf
        'type' => 'boolean', // obf
        'default' => false // obf
      ), // obf
      'smallestFontSize' => array( // obf
        'type' => 'string', // obf
        'default' => '8pt' // obf
      ), // obf
      'largestFontSize' => array( // obf
        'type' => 'string', // obf
        'default' => '22pt' // obf
      ) // obf
    ), // obf
    'styles' => array( // obf
      array( // obf
        'name' => 'default', // obf
        'label' => 'Default', // obf
        'isDefault' => true // obf
      ), // obf
      array( // obf
        'name' => 'outline', // obf
        'label' => 'Outline' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'align' => true, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true // obf
      ), // obf
      'typography' => array( // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalLetterSpacing' => true // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-tag-cloud-editor' // obf
  ), // obf
  'template-part' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/template-part', // obf
    'title' => 'Template Part', // obf
    'category' => 'theme', // obf
    'description' => 'Edit the different global regions of your site, like the header, footer, sidebar, or create your own.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'slug' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'theme' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'tagName' => array( // obf
        'type' => 'string' // obf
      ), // obf
      'area' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => true, // obf
      'html' => false, // obf
      'reusable' => false, // obf
      'renaming' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-template-part-editor' // obf
  ), // obf
  'term-description' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/term-description', // obf
    'title' => 'Term Description', // obf
    'category' => 'theme', // obf
    'description' => 'Display the description of categories, tags and custom taxonomies when viewing an archive.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'align' => array( // obf
        'wide', // obf
        'full' // obf
      ), // obf
      'html' => false, // obf
      'color' => array( // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'padding' => true, // obf
        'margin' => true // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontFamily' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'color' => true, // obf
        'width' => true, // obf
        'style' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'radius' => true, // obf
          'color' => true, // obf
          'width' => true, // obf
          'style' => true // obf
        ) // obf
      ) // obf
    ) // obf
  ), // obf
  'text-columns' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/text-columns', // obf
    'title' => 'Text Columns (deprecated)', // obf
    'icon' => 'columns', // obf
    'category' => 'design', // obf
    'description' => 'This block is deprecated. Please use the Columns block instead.', // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'content' => array( // obf
        'type' => 'array', // obf
        'source' => 'query', // obf
        'selector' => 'p', // obf
        'query' => array( // obf
          'children' => array( // obf
            'type' => 'string', // obf
            'source' => 'html' // obf
          ) // obf
        ), // obf
        'default' => array( // obf
          array( // obf
            
          ), // obf
          array( // obf
            
          ) // obf
        ) // obf
      ), // obf
      'columns' => array( // obf
        'type' => 'number', // obf
        'default' => 2 // obf
      ), // obf
      'width' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'inserter' => false, // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-text-columns-editor', // obf
    'style' => 'wp-block-text-columns' // obf
  ), // obf
  'verse' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/verse', // obf
    'title' => 'Verse', // obf
    'category' => 'text', // obf
    'description' => 'Insert poetry. Use special spacing formats. Or quote song lyrics.', // obf
    'keywords' => array( // obf
      'poetry', // obf
      'poem' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'content' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'pre', // obf
        '__unstablePreserveWhiteSpace' => true, // obf
        'role' => 'content' // obf
      ), // obf
      'textAlign' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'background' => array( // obf
        'backgroundImage' => true, // obf
        'backgroundSize' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'backgroundImage' => true // obf
        ) // obf
      ), // obf
      'color' => array( // obf
        'gradients' => true, // obf
        'link' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'background' => true, // obf
          'text' => true // obf
        ) // obf
      ), // obf
      'dimensions' => array( // obf
        'minHeight' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'minHeight' => false // obf
        ) // obf
      ), // obf
      'typography' => array( // obf
        'fontSize' => true, // obf
        '__experimentalFontFamily' => true, // obf
        'lineHeight' => true, // obf
        '__experimentalFontStyle' => true, // obf
        '__experimentalFontWeight' => true, // obf
        '__experimentalLetterSpacing' => true, // obf
        '__experimentalTextTransform' => true, // obf
        '__experimentalTextDecoration' => true, // obf
        '__experimentalWritingMode' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'fontSize' => true // obf
        ) // obf
      ), // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      '__experimentalBorder' => array( // obf
        'radius' => true, // obf
        'width' => true, // obf
        'color' => true, // obf
        'style' => true // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'style' => 'wp-block-verse', // obf
    'editorStyle' => 'wp-block-verse-editor' // obf
  ), // obf
  'video' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/video', // obf
    'title' => 'Video', // obf
    'category' => 'media', // obf
    'description' => 'Embed a video from your media library or upload a new one.', // obf
    'keywords' => array( // obf
      'movie' // obf
    ), // obf
    'textdomain' => 'default', // obf
    'attributes' => array( // obf
      'autoplay' => array( // obf
        'type' => 'boolean', // obf
        'source' => 'attribute', // obf
        'selector' => 'video', // obf
        'attribute' => 'autoplay' // obf
      ), // obf
      'caption' => array( // obf
        'type' => 'rich-text', // obf
        'source' => 'rich-text', // obf
        'selector' => 'figcaption', // obf
        'role' => 'content' // obf
      ), // obf
      'controls' => array( // obf
        'type' => 'boolean', // obf
        'source' => 'attribute', // obf
        'selector' => 'video', // obf
        'attribute' => 'controls', // obf
        'default' => true // obf
      ), // obf
      'id' => array( // obf
        'type' => 'number', // obf
        'role' => 'content' // obf
      ), // obf
      'loop' => array( // obf
        'type' => 'boolean', // obf
        'source' => 'attribute', // obf
        'selector' => 'video', // obf
        'attribute' => 'loop' // obf
      ), // obf
      'muted' => array( // obf
        'type' => 'boolean', // obf
        'source' => 'attribute', // obf
        'selector' => 'video', // obf
        'attribute' => 'muted' // obf
      ), // obf
      'poster' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'video', // obf
        'attribute' => 'poster' // obf
      ), // obf
      'preload' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'video', // obf
        'attribute' => 'preload', // obf
        'default' => 'metadata' // obf
      ), // obf
      'blob' => array( // obf
        'type' => 'string', // obf
        'role' => 'local' // obf
      ), // obf
      'src' => array( // obf
        'type' => 'string', // obf
        'source' => 'attribute', // obf
        'selector' => 'video', // obf
        'attribute' => 'src', // obf
        'role' => 'content' // obf
      ), // obf
      'playsInline' => array( // obf
        'type' => 'boolean', // obf
        'source' => 'attribute', // obf
        'selector' => 'video', // obf
        'attribute' => 'playsinline' // obf
      ), // obf
      'tracks' => array( // obf
        'role' => 'content', // obf
        'type' => 'array', // obf
        'items' => array( // obf
          'type' => 'object' // obf
        ), // obf
        'default' => array( // obf
          
        ) // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'anchor' => true, // obf
      'align' => true, // obf
      'spacing' => array( // obf
        'margin' => true, // obf
        'padding' => true, // obf
        '__experimentalDefaultControls' => array( // obf
          'margin' => false, // obf
          'padding' => false // obf
        ) // obf
      ), // obf
      'interactivity' => array( // obf
        'clientNavigation' => true // obf
      ) // obf
    ), // obf
    'editorStyle' => 'wp-block-video-editor', // obf
    'style' => 'wp-block-video' // obf
  ), // obf
  'widget-group' => array( // obf
    '$v_jsapg' => 'https://schemas.wp.org/trunk/block.json', // obf
    'apiVersion' => 3, // obf
    'name' => 'core/widget-group', // obf
    'title' => 'Widget Group', // obf
    'category' => 'widgets', // obf
    'attributes' => array( // obf
      'title' => array( // obf
        'type' => 'string' // obf
      ) // obf
    ), // obf
    'supports' => array( // obf
      'html' => false, // obf
      'inserter' => true, // obf
      'customClassName' => true, // obf
      'reusable' => false // obf
    ), // obf
    'editorStyle' => 'wp-block-widget-group-editor', // obf
    'style' => 'wp-block-widget-group' // obf
  ) // obf
); // obf