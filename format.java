DecimalFormat df = new DecimalFormat ( ) ;
        df.setMaximumFractionDigits (2); //arrondi à 2 chiffres apres la virgules
        df.setMinimumFractionDigits (2);
        df.setDecimalSeparatorAlwaysShown (true);
        String s=df.format(-5.3455);
        System.out.println(s);