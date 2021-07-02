// RemoteXY select connection mode and include library 
#define REMOTEXY_MODE__ESP8266WIFI_LIB_POINT
#include <ESP8266WiFi.h>

#include <RemoteXY.h>

// RemoteXY connection settings 
#define REMOTEXY_WIFI_SSID "MUSHO"
#define REMOTEXY_WIFI_PASSWORD "20212021"
#define REMOTEXY_SERVER_PORT 6377


// RemoteXY configurate  
#pragma pack(push, 1)
uint8_t RemoteXY_CONF[] =
  { 255,1,0,13,0,52,0,11,31,1,
  2,1,10,33,44,14,175,26,69,69,
  79,112,101,110,0,67,108,111,115,101,
  0,67,5,12,63,41,9,181,26,11,
  69,1,52,1,8,8,129,0,3,3,
  22,6,173,77,85,83,72,79,0 };
  
// this structure defines all the variables and events of your control interface 
struct {

    // input variables
  uint8_t switch_1; // =1 if switch ON and =0 if OFF 

    // output variables
  char text_1[11];  // string UTF8 end zero 
  int16_t sound_1; // =0 no sound, else ID of sound, =1001 for example, look sound list in app 

    // other variable
  uint8_t connect_flag;  // =1 if wire connected, else =0 

} RemoteXY;
#pragma pack(pop)

/////////////////////////////////////////////
//           END RemoteXY include          //
/////////////////////////////////////////////

//...#define BUTTON D1   
#define IN1    D2
#define IN2    D3

unsigned long TIME_1 = 0 ; 
unsigned long TIME_2 = 0 ;

bool flag = 1 ; 
bool m    = 1 ; 
bool r    = 1 ;
uint8_t s    = 1 ;

void setup() 
{
  RemoteXY_Init (); 
  //..pinMode(BUTTON , INPUT);
  pinMode(IN1 , OUTPUT);
  pinMode(IN2 , OUTPUT);
  TIME_1 = millis(); 
}

void loop() 
{ 
  RemoteXY_Handler ();
  
  if( ( RemoteXY.switch_1 == 1 && r == 1 ) || ( s == 0 ))
  {
    if(flag == 1)
    {
      s = 0;
      //..... UP ..........
      digitalWrite(IN1, HIGH);
      digitalWrite(IN2 , LOW);
      strcpy (RemoteXY.text_1, "wait");    
    }
   
   if( ( millis() - TIME_1  >= 10000) && ( m == 1) )
    {
      flag = 0;
      //............ sop .........
      digitalWrite(IN1 , LOW);
      digitalWrite(IN2 , LOW);
      
      strcpy (RemoteXY.text_1, "Open");
      m = 0;
      s = 2;
      TIME_1 = millis();
      } 
      
      if ( ( millis() - TIME_1 >= 30000 )&& ( m == 0  ))
      {
       RemoteXY.sound_1 = 1001;
      r = 0 ; 
      }
      
   TIME_2 = millis();
  }
  
  else 
    {
      if( s == 2 )
       {
        if(flag == 0)
        {
          digitalWrite(IN2 , HIGH);
          digitalWrite(IN1 , LOW);
          strcpy (RemoteXY.text_1, "wait");    
        }
         
      if(millis() - TIME_2 >= 10000 && m == 0)
       {
         flag =1;
         s = 1;
         digitalWrite(IN1 , LOW);
         digitalWrite(IN1 , LOW);
         strcpy (RemoteXY.text_1, "Close"); 
       
    if(r==0)
     {
        RemoteXY.sound_1 = 0;
        RemoteXY.switch_1 = 0 ;
     }
    }
    }
    
    else 
    {
      digitalWrite(IN1 , LOW);
      digitalWrite(IN2 ,LOW);
      strcpy (RemoteXY.text_1, "Close"); 
      m = 1; 
      flag = 1;
      r = 1;
      s = 1;
      TIME_1 = millis() ;
    
    }
   }  
 
}
