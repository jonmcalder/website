<div class="row">&nbsp;</div>

<ul class="nav nav-tabs" >
	<li class="<?php echo ($this->att == 'supervised_classification') ? 'active' : '' ?>">
    	<a href="#supervised_classification" data-toggle="tab">Supervised Classification</a>
    </li>
    <li class="<?php echo ($this->att == 'supervised_regression') ? 'active' : '' ?>">
		<a href="#supervised_regression" data-toggle="tab">Supervised Regression</a>
	</li>
    <li class="<?php echo ($this->att == 'learning_curve') ? 'active' : '' ?>">
		<a href="#learning_curves" data-toggle="tab">Learning Curve</a>
	</li>
    <li class="<?php echo ($this->att == 'results') ? 'active' : 'disabled' ?>">
		<a href="#results" data-toggle="tab">Results</a>
	</li>
</ul>

<div class="tab-content" >
	<div class="tab-pane <?php echo ($this->att == 'supervised_classification') ? 'active' : '' ?>" id="supervised_classification">
		<div class="bs-callout bs-callout-info">
			<h4>Supervised Classification</h4>
			Given a dataset with a classification target and a set of train/test splits, e.g. generated by a cross-validation procedure, train a model and return the predictions of that model.
		</div>
		
		<form class="form-horizontal" action="search/tab/tasktab" method="post">
			<div class="form-group">
				<label class="col-md-2 control-label" for="datasetDropdown">Estimation procedure</label>
				<input type="hidden" name="task_type" value="1" />
				<div class="col-md-10">
					<select class="form-control input-small" name="estimation_procedure">
						<?php foreach($this->ep as $e): if($e->ttid != 1)continue; ?>
						<option value="<?php echo $e->id; ?>"><?php echo $e->name; ?></option>
						<?php endforeach; ?>
					</select>
					<span class="help-block">
						Choose the estimation procedure used to evaluate the results. 
						If your preferred evaluation method is not in this list, please send us an email.
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="classificationDatasetVersionDropdown">Dataset</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="classificationDatasetVersionDropdown" name="datasets" placeholder="Include all datasets" />
					<span class="help-block">A comma separated list of the datasets to include. Leave empty to include all datasets.</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="classificationEvaluationMeasureDropdown">Evaluation measure</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="classificationEvaluationMeasureDropdown" name="evaluation_measure" placeholder="evaluation measure" value="predictive_accuracy" />
					<span class="help-block">The evaluation measure to optimize for. </span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="specify_target_feature_btn">Target feature</label>
				<div class="col-md-10">
					<input type="checkbox" checked="checked" name="default_target_feature" id="specify_classification_target_feature_btn" /> Use default target feature
				</div>
			</div>
			<div class="form-group" id="specify_classification_target_feature">
				<label class="col-md-2 control-label" for="classificationTargetFeature">Specify target feature</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="classificationTargetFeature" name="target_feature" placeholder="class" />
					<span class="help-block">Specify the name of the target feature (case sensitive). Datasets that do not contain such a feature will be excluded from the search</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label"></label>
				<div class="col-md-10">
					<button type="submit" class="btn btn-primary">
						Run Query
					</button>
				</div>
			</div>
		</div>
	</form>
	<div class="tab-pane <?php echo ($this->att == 'supervised_regression') ? 'active' : '' ?>" id="supervised_regression">
		<div class="tab-pane <?php echo ($this->att == 'supervised_regression') ? 'active' : '' ?>" id="supervised_classification">
		<div class="bs-callout bs-callout-info">
			<h4>Supervised Regression</h4>
			Given a dataset with a numeric target and a set of train/test splits, e.g. generated by a cross-validation procedure, train a model and return the predictions of that model.
		</div>
		
		<form class="form-horizontal" action="search/tab/tasktab" method="post">
			<div class="form-group">
				<label class="col-md-2 control-label" for="datasetDropdown">Estimation procedure</label>
				<input type="hidden" name="task_type" value="2" />
				<div class="col-md-10">
					<select class="form-control input-small" name="estimation_procedure">
						<?php foreach($this->ep as $e): if($e->ttid != 2)continue; ?>
						<option value="<?php echo $e->id; ?>"><?php echo $e->name; ?></option>
						<?php endforeach; ?>
					</select>
					<span class="help-block">
						Choose the estimation procedure used to evaluate the results. 
						If your preferred evaluation method is not in this list, please send us an email.
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="regressionDatasetVersionDropdown">Dataset</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="regressionDatasetVersionDropdown" name="datasets" placeholder="Include all datasets" />
					<span class="help-block">A comma separated list of the datasets to include. Leave empty to include all datasets.</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="regressionEvaluationMeasureDropdown">Evaluation measure</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="regressionEvaluationMeasureDropdown" name="evaluation_measure" placeholder="evaluation measure" value="mean_absolute_error" />
					<span class="help-block">The evaluation measure to optimize for. </span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="specify_target_feature_btn">Target feature</label>
				<div class="col-md-10">
					<input type="checkbox" checked="checked" name="default_target_feature" id="specify_regression_target_feature_btn" /> Use default target feature
				</div>
			</div>
			<div class="form-group" id="specify_regression_target_feature">
				<label class="col-md-2 control-label" for="regressionTargetFeature">Specify target feature</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="regressionTargetFeature" name="target_feature" placeholder="class" />
					<span class="help-block">Specify the name of the target feature (case sensitive). Datasets that do not contain such a feature will be excluded from the search</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label"></label>
				<div class="col-md-10">
					<button type="submit" class="btn btn-primary">
						Run Query
					</button>
				</div>
			</div>
		</div>
	</div>
  <div class="tab-pane <?php echo ($this->att == 'learning_curve') ? 'active' : '' ?>" id="learning_curve">
		<div class="tab-pane <?php echo ($this->att == 'learning_curve') ? 'active' : '' ?>" id="learning_curve">
		<div class="bs-callout bs-callout-info">
			<h4>Learning Curve</h4>
			Given a dataset with a nominal target, various data samples of increasing size are defined. A model is build for each individual data sample; from this a learning curve can be drawn. 		
    </div>
		
		<form class="form-horizontal" action="search/tab/tasktab" method="post">
			<div class="form-group">
				<label class="col-md-2 control-label" for="datasetDropdown">Estimation procedure</label>
				<input type="hidden" name="task_type" value="2" />
				<div class="col-md-10">
					<select class="form-control input-small" name="estimation_procedure">
						<?php foreach($this->ep as $e): if($e->ttid != 3)continue; ?>
						<option value="<?php echo $e->id; ?>"><?php echo $e->name; ?></option>
						<?php endforeach; ?>
					</select>
					<span class="help-block">
						Choose the estimation procedure used to evaluate the results. 
						If your preferred evaluation method is not in this list, please send us an email.
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="learningCurveDatasetVersionDropdown">Dataset</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="learningCurveDatasetVersionDropdown" name="datasets" placeholder="Include all datasets" />
					<span class="help-block">A comma separated list of the datasets to include. Leave empty to include all datasets.</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="learningCurveEvaluationMeasureDropdown">Evaluation measure</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="learningCurveEvaluationMeasureDropdown" name="evaluation_measure" placeholder="evaluation measure" value="mean_absolute_error" />
					<span class="help-block">The evaluation measure to optimize for. </span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="specify_learningCurve_target_feature_btn">Target feature</label>
				<div class="col-md-10">
					<input type="checkbox" checked="checked" name="default_target_feature" id="specify_learningCurve_target_feature_btn" /> Use default target feature
				</div>
			</div>
			<div class="form-group" id="specify_learningCurve_target_feature">
				<label class="col-md-2 control-label" for="learningCurveTargetFeature">Specify target feature</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="learningCurveTargetFeature" name="target_feature" placeholder="class" />
					<span class="help-block">Specify the name of the target feature (case sensitive). Datasets that do not contain such a feature will be excluded from the search</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label"></label>
				<div class="col-md-10">
					<button type="submit" class="btn btn-primary">
						Run Query
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane <?php echo ($this->att == 'results') ? 'active' : '' ?>" id="results">
		<h4>Results (<?php echo ($this->found_tasks) ? count($this->found_tasks) : 'none'; ?>)</h4>
		<?php if($this->task_message != false):?>
			<div class="alert alert-warning"><?php echo $this->task_message; ?></div>
		<?php elseif($this->found_tasks): ?>
			<div class="panel panel-default">
				<div class="panel-heading">All task ID's:</div>
				<div class="panel-body">
					<?php echo implode(', ', object_array_get_property( $this->found_tasks, 'task_id' ) ); ?>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">All tasks:</div>
				<div class="panel-body">
					<div class="row">
						<?php foreach( $this->found_tasks as $t ): ?>
						<div class="col-md-4"><a href="api/?f=openml.task.search&task_id=<?php echo $t->task_id; ?>"><?php echo $t->name; ?></a></div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		<?php else: ?>
			<div class="alert alert-warning">No search terms specified. </div>
		<?php endif; ?>
	</div>
</div>
