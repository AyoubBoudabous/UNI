package tp4;

public class Laboratoire {
		private String nom;
		private String specialite;
		private Bureau[] bureau;
		private int nbB ;
		
		public Laboratoire (String n,String s) {
			nom = n;
			specialite = s;
			nbB = 0;
			bureau = new Bureau[50];
		}
		
		public boolean ajouterBureau(Bureau bureau) {
			if (bureau != null && nbB <= 50) {
				this.bureau[nbB] = bureau;
				nbB ++;
				return true;
			}else return false;
		}
		
		public String toString() {
			String ch =  nom + specialite + "\n";
			for(int i=0;i<nbB;i++) {
				ch+= bureau[i].toString() + "\n";
				
			}
			return ch;
		}
		
		public boolean appartenirBureau(int code) {
				for (int i=0;i<nbB;i++) {
					if(bureau[i].getCode()==code) {
						return true;
					}
				}
				return false;
		}
		
		
}
