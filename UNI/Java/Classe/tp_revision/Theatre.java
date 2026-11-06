package spectacle;

public class Theatre {
	
		private String nom; // Nom du théâtre
		private int capacite; // Capacité du théâtre
		public PlaceSpectacle[] ListeSpect; // Liste des spectacles
		private int nbSpec; 
		
		
		public Theatre (String nom, int capacite) {
			this.nom = nom;
			this.capacite=capacite;
			ListeSpect = new PlaceSpectacle[365];
			nbSpec = 0;
		} 
		
		public int getCapacite() {
			return capacite;
		}
		
		public int TrouverSpectacle(String nomS) {
			for (int i=0;i<nbSpec;i++) {
				if(ListeSpect[i].getSpec().getNom().equals(nomS) ) {
					return i;
				}
			}
			return -1;
		} 
		
		public void AjouterSpectacle(spectacle s) {
			if (TrouverSpectacle(s.getNom()) == -1) {
				ListeSpect[nbSpec] = new PlaceSpectacle(this,s) ;
				nbSpec++;	
			}else {
				System.out.println("non effectué");
			}
		} 

		public void ReserverSpectacle (String nomS, int n) {
			if(TrouverSpectacle(nomS)!=-1) {
				if (ListeSpect[TrouverSpectacle(nomS)].getNbPlacesDispo()>=n)
				{
				ListeSpect[TrouverSpectacle(nomS)].setNbPlacesDispo(ListeSpect[TrouverSpectacle(nomS)].getNbPlacesDispo()-n);
				}else {
					System.out.println("no available seats");
				}
				}else {
				System.out.println("there is no such spectacle");
			}
		}
		
		public double TotalVentes (){
			int total=0;
			for (int i=0;i<nbSpec;i++) {
				total += ListeSpect[i].getSpec().getPrix()*(capacite-ListeSpect[i].getNbPlacesDispo());
			}
			return total;
			
		} 
		
		public void AfficherSpectacles(){
			for (int i=0;i<nbSpec;i++) {
				System.out.println("nom du spec = " + ListeSpect[i].getSpec().getNom() + " Prix = " + ListeSpect[i].getSpec().getPrix() + " nombre de places disponibles = " + ListeSpect[i].getNbPlacesDispo()+"\n");
			}
		} 


	




}
