<?php

/**
* csDummy
*/
class csDummy {
	
	private static $surnames = array("Adams", "Aigner", "Allen", "Anderson", "Auer", "Bailey", "Baker", "Barnes", "Bauer", "Baumgartner", "Bell", 
		"Bennett", "Berger", "Binder", "Brooks", "Brown", "Brunner", "Butler", "Campbell", "Carter", "Chan", "Clark", 
		"Collins", "Cook", "Cooper", "Cox", "Cruz", "Côté", "Davis", "Dominguez", "Díaz", "Ebner", "Eder", "Edwards", 
		"Egger", "Evans", "Fernandez", "Fischer", "Fisher", "Flores", "Foster", "Fuchs", "Gagnon", "García", "Gomez", 
		"González", "Gray", "Green", "Gruber", "Gutiérrez", "Gómez", "Haas", "Hall", "Harris", "Hernández", "Hill", 
		"Hofer", "Howard", "Huber", "Hughes", "Jackson", "James", "Jenkins", "Jiménez", "Johnson", "Jones", "Kelly", 
		"King", "Koller", "Lam", "Lang", "Lechner", "Lee", "Lehner", "Leitner", "Lewis", "Long", "López", "Maier", 
		"Martin", "Martínez", "Mayer", "Mayr", "McGraw", "Miller", "Mitchell", "Moore", "Morales", "Morgan", "Morris", 
		"Moser", "Murphy", "Muñoz", "Myers", "Müller", "Nelson", "Nguyen", "Ortiz", "Parker", "Perry", "Peterson", 
		"Phillips", "Pichler", "Powell", "Price", "Pérez", "Ramírez", "Reed", "Reiter", "Reyes", "Richardson", "Rivera", 
		"Roberts", "Robinson", "Rodríguez", "Rogers", "Ross", "Roy", "Ruiz", "Russell", "Sanders", "Santos", "Schmid", 
		"Schmidt", "Schneider", "Schuster", "Schwarz", "Scott", "Smith", "Steiner", "Stewart", "Suarez", "Sullivan", 
		"Sánchez", "Taylor", "Thomas", "Thompson", "Torres", "Tremblay", "Turner", "Wagner", "Walker", "Wallner", "Ward", 
		"Watson", "Weber", "White", "Williams", "Wilson", "Wimmer", "Winkler", "Wolf", "Wood", "Wright", "Young", 
		"Álvarez");
	
	private static $male_given_name = array("Adrian", "Agustín", "Aiden", "Alejandro", "Alexander", "Alexander", "Alexandre", "Alexis", 
		"Angel", "Anthony", "Antoine", "Armaan", "Arnav", "Aryan", "Bautista", "Benjamin", "Benjamín", "Bruno", "Caden", 
		"Carlos", "Carter", "Charles", "Christian", "Christopher", "Cristóbal", "Daniel", "Davi", "David", "Derek", 
		"Deven", "Diego", "Dylan", "Dylan", "Dyllan", "Elijah", "Emiliano", "Eric", "Ethan", "Ezequiel", "Francisco", 
		"Félix", "Gabriel", "Guilherme", "Gustavo", "Ian", "Ignacio", "Ishaan", "Jack", "Jackson", "Jacob", "James", 
		"James, Matthew", "Jason, Vincent", "Jayden", "Jeremiah", "Joaquín", "John", "Jose", "Joseph", "Joshua", "Josiah", 
		"João", "Juan", "Justin", "Kevin", "Kevin", "Keven", "Lautaro", "Leonardo", "Liam", "Logan", "Lucas", "Lucas", 
		"Hayden", "Lucas", "Mason", "Lucas", "Lukas", "Luis", "Luis Ángel", "Luiz", "Martín", "Mateo", "Matheus", "Matthew", 
		"Mathieu", "Matías", "Maximiliano", "Michael", "Miguel", "Miguel Ángel", "Moshe", "Nathan", "Neil", "Nicolás", 
		"Nikhil", "Noah", "Olivier", "Owen", "Pedro", "Richard", "Robert", "Rodrigo", "Rohan", "Ryan", "Samuel", 
		"Santiago", "Santino", "Sebastian", "Sebastián", "Suraj", "Thiago", "Thomas", "Tomás", "Valentino", "Vicente", 
		"William", "Ángel Gabriel");
	
	private static $female_given_name = array("Aaliyah", "Abbigail", "Abbygail", "Abigail", "Abril", "Addison", "Aditi", "Adriana", 
		"Agostina", "Agustina", "Alexis", "Alice", "Alma", "Alondra", "Alysha", "Amanda", "Ana", "Ana Paula", "Andrea", 
		"Anjali", "Antonella", "Antonia", "Anya", "Arianna", "Arushi", "Ashley", "Ava", "Avery", "Barbara", "Beatriz", 
		"Brianna", "Brooklyn", "Camila", "Camille", "Catalina", "Chana", "Chaya", "Chloe", "Cloé", "Daniela", "Delfina", 
		"Destiny", "Diya", "Dorothy", "Elizabeth", "Ella", "Emely", "Emilia", "Emilie", "Emily", "Emma", "Esther", 
		"Fernanda", "Fiona", "Florence", "Florencia", "Gabriela", "Genesis", "Grace", "Hannah", "Isabella", "Isabelle", 
		"Isidora", "Isobel", "Isobella", "Jada", "Jazmín", "Jennifer", "Jessica", "Julia", "Julieta", "Juliette", 
		"Júlia", "Kamila", "Kavya", "Kayla", "Laura", "Leah", "Lily", "Linda", "London", "Lucía", "Léa", "Madison", 
		"Makayla", "Malia", "Margaret", "Maria", "Mariana", "Martina", "Mary", "María", "María Fernanda", 
		"María Guadalupe", "María José", "Maya", "Melanie", "Mia", "Micaela", "Milagros", "Morena", "Mya", "Mía", 
		"Nevaeh", "Nicole", "Nisha", "Nishi", "Noémie", "Olivia", "Paola", "Patricia", "Rachel", "Regina", "Riya", 
		"Rosalie", "Ruhi", "Samantha", "Sara", "Sarah", "Shreya", "Sofía", "Sophia", "Sophie", "Susan", "Tiffany", 
		"Valentina", "Valeria", "Victoria", "Vitória", "Vivian", "Ximena", "Yasmin");
	
	var $address_suffix = array("Alley", "Aly.", "Bay", "Drive", "Dr.", "Close", "Gardens", "Gdns.", "Gate", "Lane", "Ln.", 
		"Manor", "Mnr.", "Passage", "Psge.", "Pathway", "Pthwy.", "Place", "Pl.", "Row", "Terrace", "Ter.", "Trace", 
		"Trce.", "Trail", "Trl.", "View", "Vw.", "Way", "Street", "Avenue");
	
	var $address_street_name = array("Second", "Third", "First", "Fourth", "Park", "Fifth", "Main", "Sixth", "Oak", "Seventh", 
		"Pine", "Maple", "Cedar", "Eighth", "Elm", "View", "Washington", "Ninth", "Lake", "Hill");
	
	public static function GivenName($gender = null) {
		if ($gender == null) $gender = rand(1, 100) > 50 ? 'male' : 'female';
		
		return $gender == 'male' ? 
			self::$male_given_name[array_rand(self::$male_given_name)] : 
			self::$female_given_name[array_rand(self::$female_given_name)];
	}
	
	public static function Surname() {
		return self::$surnames[array_rand(self::$surnames)];
	}
	
	public static function Email() {
		return 'test@example.com';
	}
}

for ($i=0;$i<100;$i++) {
    echo csDummy::GivenName($i%2?'male':'female') . ' ' . csDummy::Surname();
    echo "\n";
}

?>