import sys
sys.path.insert(0, '.')
from pyspark import SparkContext, SparkConf
from Utils import Utils

def splitComma(line: str):
    splits = Utils.COMMA_DELIMITER.split(line)
    return "{}, {}".format(splits[1], splits[8])
    
if __name__ == "__main__":
    conf = SparkConf().setAppName("AirportsInKorea").setMaster("local[*]")
    sc = SparkContext(conf = conf)
    
    airports = sc.textFile(r"c:/spark/coursedata/data/data/airports.text")
    airportsInKorea = airports.filter(lambda line: float(Utils.COMMA_DELIMITER.split(line)[8]) > 500)
    
    airportsNameandCityNames = airportsInKorea.map(splitComma)
    airportsNameandCityNames.saveAsTextFile("out/airports_by_altitude.text")

