
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.concurrent.TimeUnit;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.smartcardio.Card;
import javax.smartcardio.CardChannel;
import javax.smartcardio.CardException;
import javax.smartcardio.CardTerminal;
import javax.smartcardio.CardTerminals;
import javax.smartcardio.CommandAPDU;
import javax.smartcardio.ResponseAPDU;
import javax.smartcardio.TerminalFactory;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Quentin
 */
public class LectureRFID {
    
    private CardTerminals terminalList ;
    private TerminalFactory factory ;
    private CardTerminal MyReader ;
    private boolean cardIsPresent ;
    
    public LectureRFID(){
        factory = TerminalFactory.getDefault();
        terminalList = factory.terminals();
        MyReader = null ;
        cardIsPresent = false ;
    }
    
    public String bytesToHex(byte[] bytes)
    {
        char[] hexArray = "0123456789ABCDEF".toCharArray();
        char[] hexChars = new char[(bytes.length -2) * 2];
        for(int j = 0; j < bytes.length-2; j++)
        {
                int v = bytes[j] & 0xFF;
                hexChars[j * 2] = hexArray[v >>> 4];
                hexChars[j * 2 + 1] = hexArray[v & 0x0F];
        }
        return new String(hexChars).substring(0, hexChars.length);
    }
    
    public void addEmargement(String idCard) throws ClassNotFoundException, SQLException{
        try {
            Connection conn = null;
            Statement st = null;
            ResultSet rs = null;

            String url = "jdbc:mysql://localhost:3306/RFID";
            String user = "root";
            String password = "polytechdii";

            Class.forName("com.mysql.jdbc.Driver");
            conn = DriverManager.getConnection(url, user, password);
            String query = "INSERT INTO emargementReel(v_id_carte) VALUES ('"+idCard+"') ;";

            PreparedStatement preparedStmt = conn.prepareStatement(query);
            preparedStmt.execute();

            conn.close();
        }
        catch (Exception e){
            System.err.println("Got an exception!");
            System.err.println(e.getMessage());
        }
    }
    
    public boolean checkForReader(String readerName) throws CardException{
        try 
        {
            for(CardTerminal terminal : this.terminalList.list())
                if(terminal.getName().toLowerCase().contains(readerName.toLowerCase()))
                {
                    this.MyReader = terminal;
                    return true ;
                }
            this.MyReader = null ;
        }
        catch(CardException ex)
        {
            return false ;
        }
        return false;
    }
    
    public CardTerminal getMyReader(){
        return this.MyReader ;
    }
    
    public boolean getCardIsPresent(){
        return this.cardIsPresent ;
    }
    
    public void setCardIsPresent(boolean isPresent){
        this.cardIsPresent = isPresent ;
    }
    
    public void setMyReader(CardTerminal reader){
        this.MyReader = reader ;
    }
    
    /**
     * @param args the command line arguments
     * @throws javax.smartcardio.CardException
     */
    public static void main(String[] args) throws  CardException, ClassNotFoundException, SQLException, InterruptedException{
        // TODO code application logic here
        LectureRFID monLecteur = new LectureRFID();
        while(true)
        {
            monLecteur.setCardIsPresent(monLecteur.checkForReader("Spring"));
            System.out.println("Waiting for RFID reader...");
            if(monLecteur.getCardIsPresent())
                System.out.println("RFID reader found : "+monLecteur.getMyReader().getName());
            try
            {
                while(monLecteur.getMyReader() != null)
                {
                    try 
                    {
                        Card card = monLecteur.getMyReader().connect("*");
                        if(!monLecteur.getCardIsPresent())
                        {
                            monLecteur.setCardIsPresent(true);
                            System.out.println("Card found !");
                            /* Exchange APDUs with the card */ 
                            CardChannel channel = card.getBasicChannel(); 
                            byte[] ApduArray = { 
                                (byte) 0xFF, 
                                (byte) 0xCA, 
                                (byte) 0x00, 
                                (byte) 0x00, 
                                (byte) 0x00 
                            }; 
                            CommandAPDU GetData = new CommandAPDU(ApduArray); 
                            ResponseAPDU CardApduResponse = channel.transmit(GetData);
                            /* Disconnect */ 
                            card.disconnect(true) ;
                            System.out.println(monLecteur.bytesToHex(CardApduResponse.getBytes()));
                            monLecteur.addEmargement(monLecteur.bytesToHex(CardApduResponse.getBytes()));
                        }
                        else 
                        {
                            System.out.println("Same card as previous !");
                        }
                    }
                    catch(CardException ex) 
                    {
                        if(ex instanceof CardException){
                            System.out.println("Waiting for card...");
                            monLecteur.setCardIsPresent(false);
                            if(!monLecteur.checkForReader("Spring"))
                                monLecteur.setMyReader(null);
                        }
                        else {
                            System.err.println(ex);
                        }
                    }
                    TimeUnit.SECONDS.sleep(1);
                }
            }
            catch(CardException ex) 
            {
                System.out.println("Cannot connect to the RFID reader ");
            }
            TimeUnit.SECONDS.sleep(1);
        }
    }
    
}
