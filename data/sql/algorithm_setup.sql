INSERT INTO `algorithm_setup` (`sid`, `parent`, `implementation_id`, `algorithm`, `role`, `isDefault`, `algorithm_structure`, `setup_string`) VALUES
(1, 0, 56, NULL, 'Learner', 'true', NULL, 'weka.classifiers.rules.ZeroR'),
(2, 0, 57, NULL, 'Learner', 'true', NULL, 'weka.classifiers.rules.OneR -- -B 6'),
(3, 0, 58, NULL, 'Learner', 'true', NULL, 'weka.classifiers.bayes.NaiveBayes'),
(4, 0, 59, NULL, 'Learner', 'true', NULL, 'weka.classifiers.rules.JRip -- -F 3 -N 2.0 -O 2 -S 1'),
(5, 0, 60, NULL, 'Learner', 'true', NULL, 'weka.classifiers.trees.J48 -- -C 0.25 -M 2'),
(6, 0, 61, NULL, 'Learner', 'true', NULL, 'weka.classifiers.trees.REPTree -- -M 2 -V 0.001 -N 3 -S 1 -L -1 -I 0.0'),
(7, 0, 62, NULL, 'Learner', 'true', NULL, 'weka.classifiers.trees.DecisionStump'),
(8, 0, 63, NULL, 'Learner', 'true', NULL, 'weka.classifiers.trees.HoeffdingTree -- -L 2 -S 1 -E 1.0E-7 -H 0.05 -M 0.01 -G 200.0 -N 0.0'),
(9, 0, 64, NULL, 'Learner', 'true', NULL, 'weka.classifiers.trees.RandomTree -- -K 0 -M 1.0 -S 1'),
(10, 0, 65, NULL, 'Learner', 'true', NULL, 'weka.classifiers.trees.RandomForest -- -I 10 -K 0 -S 1 -num-slots 1'),
(11, 0, 66, NULL, 'Learner', 'true', NULL, 'weka.classifiers.lazy.IBk -- -K 1 -W 0 -A "weka.core.neighboursearch.LinearNNSearch -A \\"weka.core.EuclideanDistance -R first-last\\""'),
(12, 0, 67, NULL, 'Learner', 'true', NULL, 'weka.classifiers.bayes.BayesNet -- -D -Q weka.classifiers.bayes.net.search.local.K2 -- -P 1 -S BAYES -E weka.classifiers.bayes.net.estimate.SimpleEstimator -- -A 0.5'),
(13, 0, 70, NULL, 'Learner', 'true', NULL, 'weka.classifiers.functions.SMO -- -C 1.0 -L 0.001 -P 1.0E-12 -N 0 -V -1 -W 1 -K "weka.classifiers.functions.supportVector.PolyKernel -C 250007 -E 1.0"'),
(14, 0, 72, NULL, 'Learner', 'true', NULL, 'weka.classifiers.functions.SMO -- -C 1.0 -L 0.001 -P 1.0E-12 -N 0 -V -1 -W 1 -K "weka.classifiers.functions.supportVector.RBFKernel -C 250007 -G 0.01"'),
(15, 0, 74, NULL, 'Learner', 'true', NULL, 'weka.classifiers.functions.Logistic -- -R 1.0E-8 -M -1'),
(16, 0, 75, NULL, 'Learner', 'true', NULL, 'weka.classifiers.meta.AdaBoostM1 -- -P 100 -S 1 -I 10 -W weka.classifiers.trees.DecisionStump'),
(17, 0, 76, NULL, 'Learner', 'true', NULL, 'weka.classifiers.meta.Bagging -- -P 100 -S 1 -num-slots 1 -I 10 -W weka.classifiers.trees.REPTree -- -M 2 -V 0.001 -N 3 -S 1 -L -1 -I 0.0'),
(18, 0, 77, NULL, 'Learner', 'true', NULL, 'weka.classifiers.meta.LogitBoost -- -P 100 -F 0 -R 1 -L -1.7976931348623157E308 -H 1.0 -S 1 -I 10 -W weka.classifiers.trees.DecisionStump'),
(19, 0, 78, NULL, 'Learner', 'true', NULL, 'bayes.NaiveBayes '),
(20, 0, 79, NULL, 'Learner', 'true', NULL, 'functions.SGD '),
(21, 0, 80, NULL, 'Learner', 'true', NULL, 'trees.HoeffdingTree '),
(22, 0, 81, NULL, 'Learner', 'true', NULL, 'lazy.kNN '),
(23, 0, 82, NULL, 'Learner', 'false', NULL, 'meta.LeveragingBag -l lazy.kNN'),
(24, 0, 83, NULL, 'Learner', 'false', NULL, 'meta.LeveragingBag '),
(25, 0, 84, NULL, 'Learner', 'false', NULL, 'meta.OzaBag '),
(26, 0, 85, NULL, 'Learner', 'false', NULL, 'meta.OzaBagAdwin '),
(27, 0, 86, NULL, 'Learner', 'false', NULL, 'meta.OzaBoost '),
(28, 0, 87, NULL, 'Learner', 'false', NULL, 'meta.OzaBoostAdwin '),
(29, 0, 88, NULL, 'Learner', 'true', NULL, 'rules.AMRules '),
(30, 0, 89, NULL, 'Learner', 'false', NULL, 'meta.RandomRules '),
(31, 0, 90, NULL, 'Learner', 'true', NULL, 'rules.Perceptron '),
(32, 0, 91, NULL, 'Learner', 'true', NULL, 'rules.RuleClassifier '),
(33, 0, 92, NULL, 'Learner', 'true', NULL, 'trees.ASHoeffdingTree '),
(34, 0, 93, NULL, 'Learner', 'true', NULL, 'trees.FIMTDD '),
(35, 0, 94, NULL, 'Learner', 'true', NULL, 'trees.HoeffdingAdaptiveTree '),
(36, 0, 95, NULL, 'Learner', 'true', NULL, 'trees.RandomHoeffdingTree '),
(37, 0, 96, NULL, 'Learner', 'true', NULL, 'functions.NoChange '),
(38, 0, 97, NULL, 'Learner', 'true', NULL, 'functions.MajorityClass '),
(39, 0, 98, NULL, 'Learner', 'true', NULL, 'functions.SPegasos '),
(40, 0, 99, NULL, 'Learner', 'false', NULL, 'meta.WEKAClassifier -l (weka.classifiers.trees.J48 -C 0.25 -M 2)'),
(41, 0, 101, NULL, 'Learner', 'false', NULL, 'meta.WEKAClassifier -l (weka.classifiers.trees.REPTree -M 2 -V 0.001 -N 3 -S 1 -L -1 -I 0.0)'),
(42, 0, 103, NULL, 'Learner', 'false', NULL, 'meta.WEKAClassifier -l (weka.classifiers.rules.OneR -B 6)'),
(43, 0, 105, NULL, 'Learner', 'false', NULL, 'meta.WEKAClassifier -l weka.classifiers.bayes.NaiveBayes'),
(44, 0, 106, NULL, 'Learner', 'false', NULL, 'meta.WEKAClassifier -l (weka.classifiers.functions.LinearRegression -S 0 -R 1.0E-8)'),
(45, 0, 108, NULL, 'Learner', 'false', NULL, 'meta.WEKAClassifier -l (weka.classifiers.functions.SMO -C 1.0 -L 0.001 -P 1.0E-12 -N 0 -V -1 -W 1 -K "weka.classifiers.functions.supportVector.PolyKernel -C 250007 -E 1.0")');