<?php

namespace App\Http\Controllers\Admin\CourseModule;

use App\Http\Controllers\Controller;
use App\Models\Admin\CourseModule\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public $courseCategory;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(isset($_GET['category-id']))
        {
            $this->courseCategory = CourseCategory::where('course_category_id',$_GET['category-id'])->latest()->get();
        }
        else
        {
            $this->courseCategory = CourseCategory::where('course_category_id',0)->latest()->get();
        }
        
        return view('admin.course-management.course-category.index',[
            'courseCategories' => $this->courseCategory
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course-management.course-category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        CourseCategory::createOrUpdateCourseCategory($request);
        return back()->with('success','Course Category Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.course-management.course-category.form',[
            'courseCategory' => CourseCategory::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        CourseCategory::createOrUpdateCourseCategory($request,$id);
        return redirect()->route('course-categories.index')->with('update','Course Category Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CourseCategory::deleteCourseCategory($id);
        return back()->with('error','Course Category Deleted Successfully.');
    }
}
