<?php
function get_title(){
		echo "Available Products";
	}
// require_once 'partials/header.php'
?>

<?php

function display_content(){

$items = [
							/* -- HERSCHEL --*/
			['name' => 'Herschel 1',
			 'description' => 'Color: Black with brown strap',
			 'image' => 'images/item3.jpg',
			 'price' => 'Php 3,500.00',
			 'category' => 'Herschel'],
			 ['name' => 'Herschel 2',
			 'description' => 'Color: Blue with brown strap',
			 'image' => 'images/item4.jpg',
			 'price' => 'Php 3,700.00',
			 'category' => 'Herschel'],
			 ['name' => 'Herschel 3',
			 'description' => 'Color: Blue with brown strap',
			 'image' => 'images/item5.jpg',
			 'price' => 'Php 3,700.00',
			 'category' => 'Herschel'],
			 ['name' => 'Herschel 4',
			 'description' => 'Color: Blue with brown strap',
			 'image' => 'images/item6.jpg',
			 'price' => 'Php 4,000.00',
			 'category' => 'Herschel'],
			 ['name' => 'Herschel 5',
			 'description' => 'Color: Blue with brown strap',
			 'image' => 'images/item7.jpg',
			 'price' => 'Php 4,000.00',
			 'category' => 'Herschel'],
			  ['name' => 'Herschel 6',
			 'description' => 'Color: Blue with brown strap',
			 'image' => 'images/item8.jpg',
			 'price' => 'Php 4,000.00',
			 'category' => 'Herschel'],
			 			/* -- KATE SPADE --*/
			 ['name' => 'Kate Spade 1',
			 'description' => 'Color: Item 1',
			 'image' => 'kate-spade/kate1.jpg',
			 'price' => 'Php 3,500.00',
			 'category' => 'Kate Spade'],
			 ['name' => 'Kate Spade 2',
			 'description' => 'Color: Item 2',
			 'image' => 'kate-spade/kate2.jpg',
			 'price' => 'Php 3,500.00',
			 'category' => 'Kate Spade'],
			 ['name' => 'Kate Spade 3',
			 'description' => 'Color: Item 3',
			 'image' => 'kate-spade/kate3.jpg',
			 'price' => 'Php 3,500.00',
			 'category' => 'Kate Spade'],
			 ['name' => 'Kate Spade 4',
			 'description' => 'Color: Item 4',
			 'image' => 'kate-spade/kate4.jpg',
			 'price' => 'Php 3,500.00',
			 'category' => 'Kate Spade'],
			 ['name' => 'Kate Spade 5',
			 'description' => 'Color: Item 5',
			 'image' => 'kate-spade/kate5.jpg',
			 'price' => 'Php 3,500.00',
			 'category' => 'Kate Spade'],
			 ['name' => 'Kate Spade 6',
			 'description' => 'Color: Item 6',
			 'image' => 'kate-spade/kate6.jpg',
			 'price' => 'Php 3,500.00',
			 'category' => 'Kate Spade']

		];

		$category = array_unique(array_column($items,'category'));

		require_once 'partials/nav.php';

?>
<h2>OUR PRODUCTS</h2>
<?php
		echo "<form method='POST' action=''>";
			create_dropdown('category',$category);
		echo "</form>";
		echo "<div class='row'>";
			foreach ($items as $item) {
				if (!isset($_POST['submit']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'All')
				{
				echo "<div class='col-sm-6 col-md-4 col-lg-4'>";
					echo "<div class='thumbnail'>";
						echo "<img id='itemImage' src =" . $item['image'] . " alt='products'>";
						echo "<div class='description'>";
							echo "<h3>" . $item['name'] . "</h3>";
							echo "<p>" . $item['description'] . "</p>";
							echo "<p>" . $item['price'] . "</p>";
							echo "<p><a href='#' class='btn' role='button' id='purchase-button'> Purchase Now</a><p>";
						echo "</div>"; //---description
					echo "</div>";//---thumbnail
				echo "</div>"; //----column
		}	
	}
		echo "</div>"; //------row


} // display_content

require_once('template.php');

?>


</body>
</html>