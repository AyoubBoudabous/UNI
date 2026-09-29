package produit;

public class Produit {
	public String designation;
	public String categorie;
	public double prix;
	public double pourcentagePromotion;
	public Produit (String ch1,String ch2,double x) {
		designation = ch1;
		categorie = ch2;
		prix = x;
		pourcentagePromotion = 0;
	}
	public Produit (String ch1,String ch2,double x1,double x2) {
		designation = ch1;
		categorie = ch2;
		prix = x1;
		pourcentagePromotion = x2;
	}
	public Produit(Produit p) {
		designation = p.designation;
		designation = p.designation;
		prix=p.prix;
		pourcentagePromotion = p.pourcentagePromotion;
	}
	public String getDesignation() {
		return designation;
	}
	public void setDesignation(String designation) {
		this.designation = designation;
	}
	public String getCategorie() {
		return categorie;
	}
	public void setCategorie(String categorie) {
		this.categorie = categorie;
	}
	public double getPrix() {
		return prix;
	}
	public void setPrix(int prix) {
		this.prix = prix;
	}
	public double getPourcentagePromotion() {
		return pourcentagePromotion;
	}
	public void setPourcentagePromotion(int pourcentagePromotion) {
		this.pourcentagePromotion = pourcentagePromotion;
	}
	public boolean isEnPromotion () {
		return pourcentagePromotion != 0;
	}
	public double calculerPrixPromotionnel() {
		return prix-((prix * pourcentagePromotion)/100);
	}
	private String sloganPromo() {
		if(this.isEnPromotion()) {
			if (categorie == "Informatique") {
				if (pourcentagePromotion<20) {
					return "Promotion intéressante !";
				}else {
					return "Promotion imbattable !";
				}
			}else if (categorie == "Electromenager") {
				if (pourcentagePromotion<=30) {
					return "Bonne promo !";
				}else {
					return "Promotion incontournable !";
				}
			}else if (categorie == "Jouet") {
				if (pourcentagePromotion<=30) {
					return "Bonne promo !";
				}else {
					return "Promotion incontournable !";
				}
		}else {
			if (pourcentagePromotion>0) {
				return "A ne pas rater !";
			}
	}
}
		return null;
	
}
	
	public void afficher() {
		if (this.isEnPromotion()) {
			System.out.println( this.sloganPromo() + designation +  " Prix = " + this.calculerPrixPromotionnel() + " DT au lieu de " + prix + " DT");
		}else {
			System.out.println(designation+ " Prix = " + prix);
		}
	}
	
	public Produit comparerProduits (Produit p) {
		if (this.isEnPromotion() && p.isEnPromotion()) {
			if (this.calculerPrixPromotionnel()<p.calculerPrixPromotionnel()) {
				return this;
			}else {
				return p;
			}
		}else if (this.isEnPromotion()) {
			if (this.calculerPrixPromotionnel()<p.prix) {
				return this;
			}else {
				return p;
		}
			}else {
				if (this.prix<p.calculerPrixPromotionnel()) {
					return this;
				}else {
					return p;
			}
		}
	}
	
	
	}
