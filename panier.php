<?php
				// On vérifie si le panier n'est pas vide
				if(!empty($_SESSION['panier'])){
					// On affiche le contenu du panier
					foreach ($_SESSION['panier'] as $produit) {
						echo '<div class="produit">';
						echo '<h3>'.$produit['nom'].'</h3>';
						echo '<p>'.$produit['description'].'</p>';
						echo '<p>Prix : '.$produit['prix'].' €</p>';
						echo '<form method="post" action="panier.php">';
						echo '<input type="hidden" name="produit" value="'.$produit['id'].'">';
						echo '<input type="number" name="quantite" value="'.$produit['quantite'].'" min="1">';
						echo '<button type="submit" name="modifier">Modifier</button>';
						echo '<button type="submit" name="supprimer">Supprimer</button>';
						echo '</form>';
						echo '</div>';
					}
					// On affiche le montant total du panier
					echo '<p>Montant total : '.$montant_total.' €</p>';
					// On affiche un bouton pour passer la commande
					echo '<form method="post" action="payer.php">';
					echo '<button type="submit" name="commander">Passer la commande</button>';
					echo '</form>';
				}else{
					// Si le panier est vide, on affiche un message
					echo '<p>Votre panier est vide.</p>';
				}
			?>