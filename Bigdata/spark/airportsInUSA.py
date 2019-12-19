import sys
sys.path.insert(0, '.')
from pyspark import SparkContext, SparkConf
from Utils import Utils

def splitcomma(line:str):
    splits = Utils.COMMA_DELIMITER.split(line)
    return "{}, {}".format(splits[1], splits[2])
    
if __name__ == "__main__":    
    conf = SparkConf().setMaster("local[*]").setAppName("AirportsinUSA")
    sc = SparkContext(conf = conf)
    
    airports = sc.textFile(r"c:/spark/coursedata/data/data/airports.text")
    # airportsInUSA = airports.filter(lambda line:Utils.COMMA_DELIMITER.split(line)[3] == "\"United States\"")
    airportsInUSA = airports.filter(lambda line:Utils.COMMA_DELIMITER.split(line)[3] == "\"South Korea\"")
    
    airportsNameandCityNames = airportsInUSA.map(splitcomma)
    airportsNameandCityNames.saveAsTextFile("out/airports_in_korea1.text")
    
    res = airportsNameandCityNames.collect()
    
    for i in res:
        print(i)
        
