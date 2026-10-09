package tp4;

public class Chercheur {
	private String nom;
	private String poste;
	private int numOrdinateur;
	
	
	public Chercheur(String n, String p, int nO ) {
		nom = n ;
		poste = p ;
		numOrdinateur=nO;
	}


	public int getNumOrdinateur() {
		return numOrdinateur;
	}


	public void setNumOrdinateur(int numOrdinateur) {
		this.numOrdinateur = numOrdinateur;
	}
	
	public String toString () {
		return nom + "    " + poste + " " + numOrdinateur;
	}
	
	public  boolean equals(Chercheur c) {
		return this.nom == c.nom && this.poste == c.poste && this.numOrdinateur == c.numOrdinateur;
	}
}
