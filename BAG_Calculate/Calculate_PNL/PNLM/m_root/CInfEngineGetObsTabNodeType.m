%% This file were automatically generated by SWIG's MatLab module
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%                                                                         %%
%%                INTEL CORPORATION PROPRIETARY INFORMATION                %%
%%   This software is supplied under the terms of a license agreement or   %%
%%  nondisclosure agreement with Intel Corporation and may not be copied   %%
%%   or disclosed except in accordance with the terms of that agreement.   %%
%%       Copyright (c) 2003 Intel Corporation. All Rights Reserved.        %%
%%                                                                         %%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%% [result] = GetObsTabNodeType(varargin)
%%
%% C++ prototype: pnl::CNodeType const *pnl::CInfEngine::GetObsTabNodeType()
%%

function [result] = GetObsTabNodeType(varargin)

[result] = feval('pnl_full', 'CInfEngine_GetObsTabNodeType_wrap', varargin{:});
result = CNodeType('%%@#DefaultCtor', result);

return
