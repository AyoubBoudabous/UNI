package spectacle;

public class PlaceSpectacle {
	private Theatre theat; 
	private spectacle spec; 
	private int nbPlacesDispo; 
	
	public PlaceSpectacle (Theatre t, spectacle s) {
		theat = t;
		spec = s;
		nbPlacesDispo = t.getCapacite();
		
	}

	public spectacle getSpec() {
		return spec;
	}

	public int getNbPlacesDispo() {
		return nbPlacesDispo;
	}

	public void setNbPlacesDispo(int nbPlacesDispo) {
		this.nbPlacesDispo = nbPlacesDispo;
	}

}
