package tp4;

public class Test {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Chercheur c1 = new Chercheur("Béji Ahmed","Technologue",111222);
		Chercheur c2 = new Chercheur("Kéfi Mohamed","Assistant Technologue",111333);
		
		Bureau b1 = new Bureau(123,"Bureau Les Jasmins");
		Bureau b2 = new Bureau(456,"Bureau Les Roses");
		
		b1.affecterChercheur(c1);
		b2.affecterChercheur(c2);
		
		Laboratoire l = new Laboratoire("Ayoub","DSI");
		
		l.ajouterBureau(b1);
		l.ajouterBureau(b2);
		
		System.out.println(l.toString());
		
		if (c1.equals(c2)) {
			System.out.println("ils sont identiques ! ");
		}else System.out.println("ils ne sont pas identiques ! ");
		
		if (Bureau.compare(b1, b2)) {
			System.out.println("ils sont identiques ! ");
		}else System.out.println("ils ne sont pas identiques ! ");
		
		if (l.appartenirBureau(789)) {
			System.out.println("Mawjoud");
		}else System.out.println("mahoush Mawjoud !");
		
		}

}
