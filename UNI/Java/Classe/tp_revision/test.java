package spectacle;

public class test {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		spectacle s1 = new spectacle("Shehrazède",20);
		spectacle s2 = new spectacle("Jounoun",15);
		
		Theatre t = new Theatre("Municipal",800);
		
		t.AjouterSpectacle(s1);
		t.AjouterSpectacle(s2);
		
		t.ReserverSpectacle(s1.getNom(), 5);
		t.ReserverSpectacle(s2.getNom(), 4);
		
		t.AfficherSpectacles();
		
		System.out.println(t.TotalVentes());
	}

}
