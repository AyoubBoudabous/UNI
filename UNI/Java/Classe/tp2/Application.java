package produit;

public class Application {

	public static void main(String[] args) {
		Produit p1 = new Produit("PC" , "Informatique" , 1350.89);
		Produit p2 = new Produit("Frigo" , "Electromenager" , 1102 , 20);
		Produit p3 = new Produit("Poupee" , "Jouet" , 45.6 , 60);
		p1.afficher();
		p2.afficher();
		p3.afficher();
		Produit p4 = new Produit(p1);
		p4.pourcentagePromotion = 20;
		p4.afficher();
		Produit p5 = new Produit(p2);
		p5.prix = 28.7;
		p5.afficher();
		Produit test = new Produit(p1);
		test = p1.comparerProduits(p2);
		if(p1.categorie.equals(p2.categorie) ) {
			if ( test == p1 ) {
				p1.afficher();
			}else {
				p2.afficher();
			}
		}else {
			System.out.println("pas meme categorie ! ");
		}
	}

}
