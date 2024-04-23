<?php
get_header(); ?>


<?php
$first_section_title = get_field('first_section_title');
$first_section_text = get_field('first_section_text');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$background_image = get_field('background_image');
$second_section_title = get_field('second_section_title');
?>

<section class="first-section">
    <div class="container">
        <h2><?php echo $first_section_title; ?></h2>
        <p><?php echo $first_section_text; ?></p>
        <a href="<?php echo $button_link; ?>" class="btn"><?php echo $button_text; ?></a>
    </div>
    
</section>


<?php
$second_section_title = get_field('second_section_title');
$second_section_cards = get_field('second_section_cards');
$template_uri = get_template_directory_uri(); 
?>

<section class="second-section">
    <div class="second-container">
        <h2><?php echo $second_section_title; ?></h2>

        <div class="cards">
        <?php
        if ($second_section_cards) {
            
            foreach ($second_section_cards as $card) {
                
                echo "<div class='card'>";
                
                // Loop through each section of the card (21, 22, 23)
                for ($i = 21; $i <= 23; $i++) {
                    
                    if (isset($card[$i . 'title'], $card[$i . 'text'])) {
                        $title = $card[$i . 'title'];
                        $text = $card[$i . 'text'];
                        
                        
                        echo "<div class='section'>";
                       
                        switch ($i) {
                            case 21:
                                // URI for section 21
                                $icon_uri = $template_uri . '/assets/images/21.png';
                                break;
                            case 22:
                                // URI for section 22
                                $icon_uri = $template_uri . '/assets/images/22.png';
                                break;
                            case 23:
                                // URI for section 23
                                $icon_uri = $template_uri . '/assets/images/23.png';
                                break;
                            default:
                                
                                $icon_uri = $template_uri . '/assets/images/default_icon.png';
                        }
                        echo "<img src='$icon_uri' alt='Icon $i'>"; 
                        echo "<h3>$title</h3>";
                        echo "<p>$text</p>";
                        echo "</div>";
                    }
                }
                
                echo "</div>"; 
            }
        } else {
            echo "<p>No cards found.</p>";
        }
        ?>
        </div>
        
    </div>
</section>


<?php
// Get the third section title
$third_section_title = get_field('third_section_title');

// Get the third section text
$third_section_text = get_field('third_section_text');

// Output the third section with class "third-section"
echo '<div class="third-section">';
echo '<h2>' . $third_section_title . '</h2>';
echo '<p>' . $third_section_text . '</p>';

// Get the third section cards (assuming it's a repeater field)
$third_section_cards = get_field('third_section_cards');

// Check if the third section cards exist and if it has any items
if ($third_section_cards) {
    // Start "third-cards" div
    echo '<div class="third-cards">';
    
    // Get card one
    $one_card = $third_section_cards['one_card'];
    $one_card_title = $one_card['one_card_title'];
    $one_card_text = $one_card['one_card_text'];

    // Get card two
    $two_card = $third_section_cards['two_card'];
    $two_card_title = $two_card['two_card_title'];
    $two_card_text = $two_card['two_card_text'];

    // Get card three
    $three_card = $third_section_cards['three_card'];
    $three_card_title = $three_card['three_card_title'];
    $three_card_text = $three_card['three_card_text'];

    // Get card four
    $four_card = $third_section_cards['four_card'];
    $four_card_title = $four_card['four_card_title'];
    $four_card_text = $four_card['four_card_text'];

    // Get the base URL of the theme
    $theme_base_url = get_template_directory_uri();

    // Display the cards
    echo '<div class="thcard">';
    echo '<img src="' . $theme_base_url . '/assets/images/31.png" alt="">';
    echo '<h3>' . $one_card_title . '</h3>';
    echo '<p>' . $one_card_text . '</p>';
    echo '</div>';

    echo '<div class="thcard">';
    echo '<img src="' . $theme_base_url . '/assets/images/32.png" alt="">';
    echo '<h3>' . $two_card_title . '</h3>';
    echo '<p>' . $two_card_text . '</p>';
    echo '</div>';

    echo '<div class="thcard">';
    echo '<img src="' . $theme_base_url . '/assets/images/33.png" alt="">';
    echo '<h3>' . $three_card_title . '</h3>';
    echo '<p>' . $three_card_text . '</p>';
    echo '</div>';

    echo '<div class="thcard">';
    echo '<img src="' . $theme_base_url . '/assets/images/34.png" alt="">';
    echo '<h3>' . $four_card_title . '</h3>';
    echo '<p>' . $four_card_text . '</p>';
    echo '</div>';

    // End "third-cards" div
    echo '</div>';
}

// End "third-section" div
echo '</div>';
?>

















