package Point;

public class Point {
	private float abs;
	private float ord;
	
	public float distanceOrigine () {
		return (float)Math.sqrt(abs * abs + ord * ord);
		
	}
	public float distancePoint(Point pt) {
		return (float)Math.sqrt((abs - pt.abs)*(abs - pt.abs) + (ord - pt.ord) * (ord - pt.ord)); 
	}
	
	public void initialiser (float x,float y) {
		abs = x; ord = y;
	}
	
	public void afficher () {
		System.out.println ("abs = " + abs + "; ord = " + ord );
	}
	
	public void setAbs (float x) {
		abs =x;
	}
	
	public float getAbs () {
		return abs ;
	}
	public float getOrd() {
		return ord;
	}
	public void setOrd(float ord) {
		this.ord = ord;
	}
	
}
