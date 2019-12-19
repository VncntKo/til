


data <- read.table(file="d:/ko/spark/bigdata_final_enc/test.csv", header=TRUE, sep=',')

data

ggplot(data=data, mapping=aes(x=word, y=counts)) + geom_bar(stat="identity")




airports <- read.table(file="d:/ko/spark/bigdata_final_enc/turkey.csv", header=TRUE, sep=',')

airports

Turkeys <- map_data("world", region = c("Turkey"))

ggplot() + geom_polygon(Turkeys, mapping=aes(x=long, y=lat, group=group, fill=region), colour="black")+ geom_point(data=airports, aes(x=lon, y=lat), size=3)



airport <- read.table(file="d:/ko/spark/bigdata_final_enc/korea.csv", header=TRUE, sep=',')

airport

korea <- map_data("world", region = c("south Korea"))

ggplot() + geom_polygon(korea, mapping=aes(x=long, y=lat, group=group, fill=region), colour="black")+ geom_point(data=airport, aes(x=lon, y=lat), size=3)
