package tp4;

public class Bureau {
	private int code;
	private String nom;
	private Chercheur ch;
	
	public Bureau (int c,String n) {
		code = c;
		nom = n;
		
	}

	public int getCode() {
		return code;
	}

	public void setCode(int code) {
		this.code = code;
	}
	
	public String toString() {
		return code + " " + nom + "\naffecté au chercheur :"+ch.toString();
	}
	
	boolean affecterChercheur(Chercheur c) {
		if (ch == null) {
			ch = c;
			return true;
		}else return false;
	}
	
	public int trouverOrdinateur() {
			return ch.getNumOrdinateur();
	}
	
	public static boolean compare(Bureau bureau1, Bureau bureau2) {
		return bureau1.nom == bureau2.nom && bureau1.code == bureau2.code;
	}
	
	
}
	