
count(diamonds)
diamonds
summary(diamonds)

ggplot(data = diamonds) +  geom_bar(mapping = aes(x = cut))
ggplot(data = diamonds) +  geom_bar(mapping = aes(x = cut))

diamonds%>%
  count(cut)

ggplot(data = diamonds) +  geom_histogram(mapping = aes(x = carat))
ggplot(data = diamonds) +  geom_histogram(mapping = aes(x = carat), bins=10)
# bins = 간격의 갯수
ggplot(data = diamonds) +  geom_histogram(mapping = aes(x = carat), binwidth = 0.5)
ggplot(data = diamonds, mapping = aes(x = carat)) +  geom_histogram(binwidth = 0.5)
# binswidth = width of bins
diamonds %>%
  count(cut_width(carat, 0.5))

smaller = diamonds %>%
  filter(carat < 3)

ggplot(data = smaller) +  geom_histogram(mapping = aes(x = carat), binwidth = 0.1)

ggplot(data = smaller, mapping = aes(x = carat, color = cut)) +  geom_freqpoly(binwidth = 0.1)

ggplot(data = smaller, mapping = aes(x = carat)) +  geom_histogram(binwidth = 0.01)

summary(faithful)

ggplot(data = faithful, mapping = aes(x = eruptions)) +  geom_histogram(binwidth = 0.25)


diamonds

summary(diamonds)

ggplot(diamonds) +  geom_histogram(mapping = aes(x = y), binwidth = 0.5)


# show outlier
ggplot(diamonds) + geom_histogram(mapping=aes(x=y), binwidth=0.5) + coord_cartesian(ylim=c(0,50))


# select outliers
unusual <- diamonds %>%
  filter(y<3 | y>20) %>%
  arrange(y)
unusual

count(unusual)

ggplot(unusual) + geom_histogram(mapping=aes(x=y), binwidth=0.5)

# select not outliers
diamonds2 = diamonds %>%
  filter(between(y, 3, 20))

diamonds2
count(diamonds2)

ggplot(diamonds2) + geom_histogram(mapping=aes(x=y), binwidth=0.5)



# drop outliers
diamonds2 = diamonds %>%
  mutate(y=ifelse(y<3 | y>20, NA, y))

diamonds2
count(diamonds2)

ggplot(diamonds2) + geom_histogram(mapping=aes(x=y), binwidth = 0.5)


ggplot(data=diamonds2, mapping=aes(x=x, y=y)) + geom_point()

# remove NA => na.rm
ggplot(data=diamonds2, mapping=aes(x=x, y=y)) + geom_point(na.rm=TRUE)

ggplot(data=diamonds2, mapping=aes(x=carat, y=price)) + geom_point()


ggplot(data = diamonds, mapping = aes(x = price)) +  geom_freqpoly(mapping = aes(color = cut), binwidth = 500)
ggplot(data = diamonds, mapping = aes(x = price, color = cut)) +  geom_freqpoly(binwidth = 500)
ggplot(data = diamonds, mapping = aes(x = price, color = cut)) +  geom_freqpoly()

ggplot(diamonds) +  geom_bar(mapping = aes(x = cut))

summary(diamonds)

summary(diamonds$price)

diamonds$price




# boxplot
ggplot(data=diamonds, mapping=aes(x=cut, y=price)) + geom_boxplot()


# mile per gallon
ggplot(data = mpg, mapping = aes(x = class, y = hwy)) +  geom_boxplot()

count(mpg)
mpg
mpg$class


ggplot(data = mpg, mapping = aes(x = class, y = cty)) +  geom_boxplot()


ggplot(data = mpg, mapping = aes(x = cty, y = hwy)) +  geom_point()
#city and highway is 정비례, 도시연비, 고속도로연비


#상관계수
cor(mpg$cty, mpg$hwy)

diamonds


diamonds %>% 
  count(color, cut) %>% 
  ggplot(mapping=aes(x=color, y=cut)) + geom_tile(mapping=aes(fill=n))


ggplot(data = diamonds) +  geom_point(mapping = aes(x = carat, y = price), alpha = 1 / 100)

