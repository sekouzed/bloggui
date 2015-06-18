<?php
namespace App\Controller\Author;

use App\Controller\AppController;

class RubricsController extends AppController
{

//    public function index()
//    {
//        $this->paginate = [
//            'contain' => ['ParentRubrics']
//        ];
//        $this->set('rubrics', $this->paginate($this->Rubrics));
//    }
    public function index()
    {
        $rubrics = $this->Rubrics->find('threaded')
            ->order(['lft' => 'ASC']);
        $this->set('rubrics', $this->paginate($rubrics));

        $rubricsList = $this->Rubrics->find('treeList', [
//            'keyPath' => 'title',
//            'valuePath' => 'id',
            'spacer' => '__'
        ]);
//        debug($rubricsList);
        $this->set(compact('rubricsList'));
    }

    public function move_up($id = null)
    {
        $this->request->allowMethod(['post', 'put']);
        $rubric = $this->Rubrics->get($id);
        if ($this->Rubrics->moveUp($rubric)) {
            $this->Flash->success('The rubric has been moved Up.');
        } else {
            $this->Flash->error('The rubric could not be moved up. Please, try again.');
        }
        return $this->redirect($this->referer(['action' => 'index']));
    }

    public function move_down($id = null)
    {
        $this->request->allowMethod(['post', 'put']);
        $rubric = $this->Rubrics->get($id);
        if ($this->Rubrics->moveDown($rubric)) {
            $this->Flash->success('The rubric has been moved down.');
        } else {
            $this->Flash->error('The rubric could not be moved down. Please, try again.');
        }
        return $this->redirect($this->referer(['action' => 'index']));
    }

    public function add()
    {
        $rubric = $this->Rubrics->newEntity();
        if ($this->request->is('post')) {
            $rubric = $this->Rubrics->patchEntity($rubric, $this->request->data);
            if ($this->Rubrics->save($rubric)) {
                $this->Flash->success(__('The rubric has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rubric could not be saved. Please, try again.'));
            }
        }
        $parentRubrics = $this->Rubrics->ParentRubrics->find('treeList');
        $this->set(compact('rubric', 'parentRubrics'));
    }

    public function edit($id = null)
    {
        $rubric = $this->Rubrics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rubric = $this->Rubrics->patchEntity($rubric, $this->request->data);
            if ($this->Rubrics->save($rubric)) {
                $this->Flash->success(__('The rubric has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rubric could not be saved. Please, try again.'));
            }
        }
        $parentRubrics = $this->Rubrics->ParentRubrics->find('treeList');
        $this->set(compact('rubric', 'parentRubrics'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rubric = $this->Rubrics->get($id);
        if ($this->Rubrics->delete($rubric)) {
            $this->Flash->success(__('The rubric has been deleted.'));
        } else {
            $this->Flash->error(__('The rubric could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
