package spectacle;

public class spectacle {
	private String nom ;
	private int prix;
	public String getNom() {
		return nom;
	}
	public void setNom(String nom) {
		this.nom = nom;
	}
	public int getPrix() {
		return prix;
	}
	public void setPrix(int prix) {
		this.prix = prix;
	}
	
	public spectacle() {
		nom = "";
		prix = 0;
	}
	
	public spectacle(String ch, int x) {
		nom = ch;
		prix = x;
	}
	
	public String toString() {
		return "nom : " + nom + " prix : " + prix;
	}
	
	
}
