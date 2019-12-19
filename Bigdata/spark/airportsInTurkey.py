import sys
sys.path.insert(0, '.')
from pyspark import SparkContext, SparkConf
from Utils import Utils

def splitcomma(line:str):
    splits = Utils.COMMA_DELIMITER.split(line)
    return (splits[1], splits[6], splits[7])

if __name__ == "__main__":
    conf = SparkConf().setMaster("local[*]").setAppName("AirportsinTurkey")
    sc = SparkContext(conf = conf)
    
    airports = sc.textFile(r"d:/ko/spark/bigdata_final_enc/airports.txt")
    
    AirportsinTurkey = airports.filter(lambda line:Utils.COMMA_DELIMITER.split(line)[3] == "\"South Korea\"")    
    airportsNameandCityNames = AirportsinTurkey.map(splitcomma)
    
    res = airportsNameandCityNames.collect()
    
    with open(r'D:/ko/spark/bigdata_final_enc/korea.csv', 'w', encoding='utf-8', newline='\n') as f:
        f.writelines('airports,lat,lon\n')
        for r in res:
            try:
                print(r)
                f.writelines(r[0]+','+r[1]+','+r[2]+'\n')
            except UnicodeEncodeError:
                continue        
        
