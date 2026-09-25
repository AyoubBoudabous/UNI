package Point;

public class Test {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Point p1 = new Point();
		p1.initialiser(1,1);
		Point p2 = new Point();
		p2.initialiser(10,10);
		System.out.println("Hello world !");
		float p = p1.distanceOrigine();	
		System.out.println(p);
		System.out.println(p1.distancePoint(p2));
		if (p1.distanceOrigine() < p2.distanceOrigine()) {
			System.out.println("p1 is the closest to origin");
		} else {
			System.out.println("p2 is the closest to origin");
		}
		p1.afficher();
		p2.afficher();
		System.out.println(p1.getAbs());
	}

}
